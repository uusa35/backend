<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Services\Search\Filters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = User::companies()->with('country')->paginate(Self::TAKE);
        return view('frontend.wokiee.four.modules.user.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Filters $filters)
    {
        $element = User::whereId($id)->with('products','services')->first();
        $products = $element->products()->filters($filters)->with([
            'product_attributes.color','color',
            'product_attributes.size',
            'tags','categories.children','brands'
        ])->paginate(Self::TAKE);
        $services = $element->services()->filters($filters)->paginate(Self::TAKE);
        $tags = $services->pluck('tags')->flatten()->unique('id')->sortKeysDesc();
//        $sizes = $products->pluck('product_attributes')->flatten()->pluck('size')->flatten()->unique('id')->sortKeysDesc();
//        $colors = $products->pluck('product_attributes')->flatten()->pluck('color')->flatten()->unique('id')->sortKeysDesc();
//        $brands = $products->pluck('brands')->flatten()->flatten()->unique('id')->sortKeysDesc();
        $categoriesList = $services->pluck('categories')->flatten()->unique('id');
        $vendors = $services->pluck('user')->flatten()->unique('id');
        return view('frontend.wokiee.four.modules.user.show', compact('element', 'products', 'services','tags','sizes','colors','brands','categoriesList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
