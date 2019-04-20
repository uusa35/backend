<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Service;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Service::myItems()->get();
        return view('backend.modules.service.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('service.create');
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $tags = Tag::active()->get();
        $brands = Brand::active()->get();
        $users = User::active()->get();
        return view('backend.modules.service.create', compact('categories', 'tags', 'brands', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $end_sale = $request->has('end_sale') ? Carbon::parse(str_replace('-', '', $request->end_sale))->toDateTimeString() : null;
        $start_sale = $request->has('start_sale') ? Carbon::parse(str_replace('-', '', $request->start_sale))->toDateTimeString() : null;
        $element = Service::create($request->except(['_token', 'image', 'images', 'categories', 'start_sale', 'end_sale']));
        if ($element) {
            $start_sale ? $element->update(['start_sale' => $start_sale]) : null;
            $end_sale ? $element->update(['end_sale' => $end_sale]) : null;
            $request->has('images') ? $this->saveGallery($element, $request, 'images', ['1080', '1440'], true) : null;
            $element->categories()->sync($request->categories);
            $request->hasFile('image') ? $this->saveMimes($element, $request, ['image'], ['1080', '1440'], true) : null;

            return redirect()->route('backend.service.index')->with('success', 'Service added');
        }
        return redirect()->back()->with('error', 'Service is not saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Aboutus::whereId($id)->first();
        return view('backend.modules.aboutus.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $element = Aboutus::whereId($id)->first();
        if ($element) {
            $element->update($request->all());
            return redirect()->route('backend.aboutus.index')->with('success', 'Aboutus added');
        }
        return redirect()->back()->with('error', 'Aboutus is not saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Aboutus::whereId($id)->first();
        if ($element->delete()) {
            return redirect()->route('backend.aboutus.index')->with('success', 'aboutus deleted');
        }
        return redirect()->back()->with('error', 'aboutus is not deleted.');
    }
}
