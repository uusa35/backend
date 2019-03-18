<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Day;
use App\Models\Service;
use App\Services\Search\Filters;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Filters $filters)
    {
        $elements = Service::filters($filters)->hasImage()->active()->available()->with([
            'tags', 'user.country', 'images', 'user.areas',
            'favorites', 'categories.children'
        ])->paginate(self::TAKE);
        $tags = $elements->pluck('tags')->flatten()->unique('id')->sortKeysDesc();
        $categoriesList = $elements->pluck('categories')->flatten()->unique('id');
        $vendors = $elements->pluck('user')->flatten()->unique('id');
        $areas = $elements->pluck('user.areas')->flatten()->unique('id');
        return view('frontend.wokiee.four.modules.service.index', compact('elements', 'tags', 'categoriesList', 'vendors', 'areas'));
    }

    public function search(Filters $filters)
    {
        $validator = validator(request()->all(), ['search' => 'nullable']);
        if ($validator->fails()) {
            return redirect()->route('frontend.home')->withErrors($validator->messages());
        }
        $elements = $this->service->active()->hasImage()->serveCountries()->filters($filters)->with(
            'tags', 'user.country', 'images', 'user.areas', 'favorites'
        )->with(['categories' => function ($q) {
            return $q->has('services', '>', 0);
        }])->orderBy('id', 'desc')->paginate(self::TAKE);
        $tags = $elements->pluck('tags')->flatten()->unique('id')->sortKeysDesc();
        $categoriesList= $elements->pluck('categories')->flatten()->unique('id')->sortKeysDesc();
        $vendors = $elements->pluck('user')->unique('id')->flatten();
        $areas = $elements->pluck('user.areas')->flatten()->unique('id');
        session()->put('day_selected_format', request('day_selected_format'));
        session()->put('day_selected', request('day_selected'));
        session()->put('area_id', request('area_id'));
        if (!$elements->isEmpty()) {
            return view('frontend.wokiee.four.modules.service.index', compact(
                'elements', 'tags', 'areas',
                'categoriesList', 'currentCategory', 'vendors'
            ));
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
        $element = Service::whereId($id)->with('categories', 'timings.days', 'images', 'tags', 'user')->first();
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
