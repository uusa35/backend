<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductStore;
use App\Http\Requests\Backend\ProductUpdate;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ShipmentPackage;
use App\Models\Size;
use App\Models\Tag;

use App\Models\User;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('index', 'product');
        if (auth()->user()->isAdminOrABove) {
            $elements = Product::with('user', 'images', 'product_attributes.size', 'product_attributes.color')->get();
        } else {
            if (request()->has('type')) {
                $elements = Product::active()->myItems()->where([request('type') => true])->with('user', 'images', 'product_attributes.size', 'product_attributes.color')->orderBy('id', 'desc')->get();
            } else {
                $elements = Product::active()->myItems()->with('user', 'images', 'product_attributes.size', 'product_attributes.color')->orderBy('id', 'desc')->get();
            }
        }
        return view('backend.modules.product.index', compact('elements'));
    }

    public function trashed()
    {
        $elements = Product::onlyTrashed()->paginate(100);
        return view('backend.modules.product.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('product.create');
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $tags = Tag::active()->get();
        $brands = Brand::active()->get();
        $users = User::active()->companies()->get();
        $colors = Color::active()->get();
        $sizes = Size::active()->get();
        $shipment_packages = ShipmentPackage::active()->get();
        return view('backend.modules.product.create', compact('categories', 'tags', 'brands', 'users', 'shipment_packages', 'colors', 'sizes'));
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        $end_sale = $request->has('end_sale') ? Carbon::parse(str_replace('-', '', $request->end_sale))->toDateTimeString() : null;
        $start_sale = $request->has('start_sale') ? Carbon::parse(str_replace('-', '', $request->start_sale))->toDateTimeString() : null;
        $element = Product::create($request->except(['_token', 'image', 'images', 'categories', 'tags', 'start_sale', 'end_sale']));
        if ($element) {
            $start_sale ? $element->update(['start_sale' => $start_sale]) : null;
            $end_sale ? $element->update(['end_sale' => $end_sale]) : null;
            $element->tags()->sync($request->tags);
            $element->categories()->sync($request->categories);
            $request->hasFile('image') ? $this->saveMimes($element, $request, ['image'], ['1080', '1440'], true) : null;
            $request->has('images') ? $this->saveGallery($element, $request, 'images', ['1080', '1440'], true) : null;
            $request->hasFile('size_chart_image') ? $this->saveMimes($element, $request, ['size_chart_image'], ['500', '500'], false) : null;
            if ($element->has_attributes) {
                return redirect()->route('backend.attribute.create', ['product_id' => $element->id, 'type' => 'product'])->with('success', 'product saved.');
            }
            return redirect()->route('backend.product.index')->with('success', trans('message.product_created_successfully'));

        }
        return redirect()->back()->with('error', 'unknown error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('frontend.product.show', $id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $tags = Tag::active()->get();
        $brands = Brand::active()->get();
        $users = User::active()->companies()->get();
        $colors = Color::active()->get();
        $sizes = Size::active()->get();
        $shipment_packages = ShipmentPackage::active()->get();
        $element = Product::whereId($id)->with([
            'categories', 'brand', 'tags', 'user', 'product_attributes'
        ])->first();
        return view('backend.modules.product.edit', compact('element', 'categories', 'tags', 'brands', 'colors', 'sizes', 'shipment_packages', 'users'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdate $request, $id)
    {
        $end_sale = $request->has('end_sale') ? Carbon::parse(str_replace('-', '', $request->end_sale))->toDateTimeString() : null;
        $start_sale = $request->has('start_sale') ? Carbon::parse(str_replace('-', '', $request->start_sale))->toDateTimeString() : null;
        $element = Product::whereId($id)->with('images')->first();
        if ($element) {
            $start_sale ? $element->update(['start_sale' => $start_sale]) : null;
            $end_sale ? $element->update(['end_sale' => $end_sale]) : null;
            $element->tags()->sync($request->tags);
            $element->categories()->sync($request->categories);
            $request->hasFile('image') ? $this->saveMimes($element, $request, ['image'], ['1080', '1440'], true) : null;
            $request->has('images') ? $this->saveGallery($element, $request, 'images', ['1080', '1440'], true) : null;
            $request->hasFile('size_chart_image') ? $this->saveMimes($element, $request, ['size_chart_image'], ['500', '500'], false) : null;
            return redirect()->route('backend.product.index')->with('success', trans('message.product_updated_successfully'));

        }
        return redirect()->back()->with('error', 'unknown error');
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('product.delete', $element);
        $element = Product::whereId($id)->first();
        $element->categories()->detach($element->categories->pluck('id')->toArray());
        $element->tags()->detach($element->tags->pluck('id')->toArray());
        if ($element->delete()) {
            return redirect()->back()->with('success', 'product deleted');
        }
        return redirect()->back()->with('error', 'product is not deleted');
    }

    public function restore($id)
    {
        $element = Product::withTrashed()->whereId($id)->first();
        $element->restore();
        return redirect()->back()->with('success', 'product restored');
    }
}
