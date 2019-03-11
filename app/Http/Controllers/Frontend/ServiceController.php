<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Day;
use App\Models\Service;
use App\Services\Search\Filters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Filters $filters)
    {
        $services = Service::filters($filters)->hasImages()->active()->paginate(12);
        return view('frontend.modules.favorite.index', compact('services'));
    }

    public function search(Filters $filters)
    {
        dd(request()->all());
        $validator = validator(request()->all(), ['search' => 'nullable']);
        if ($validator->fails()) {
            return redirect()->route('frontend.home')->withErrors($validator->messages());
        }
        $elements = Service::active()->hasImages()->filters($filters)->with('categories')->orderBy('id', 'desc')->paginate(20);
        $categoriesList = $elements->pluck('categories')->flatten()->unique('id');
        if (!$elements->isEmpty()) {
            $currentCategory = request()->has('category_id') ? Category::whereId(request('category_id'))->first() : null;
            return view('frontend.modules.service.index', compact('elements', 'categoriesList', 'currentCategory'));
        } else {
            return redirect()->route('frontend.home')->with('error', trans('message.no_items_found'));
        }
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
    public function show($id)
    {
        $element = Service::whereId($id)->with('categories','timings.days', 'images', 'tags', 'user')->first();
        $workingDays = $element->timings->pluck('day', 'day_no')->keys()->unique()->toArray();
        $dayOff = $element->timings->where('is_off', true)->first();
        $relatedItems = $element->getRelatedItems($element);
        return view('frontend.wokiee.four.modules.service.show', compact('element', 'relatedItems', 'workingDays', 'dayOff'));
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
