<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->isAdminOrAbove) {
            $elements = Slide::all();
        } else {
            $validate = validator(request()->all(), [
                'slidable_id' => 'required|numeric',
                'slidable_type' => 'required|alpha'
            ]);
            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate->errors());
            }

            $className = '\App\Models\\' . title_case(request()->slidable_type);
            $item = new $className();
            $item = $item->withoutGlobalScopes()->whereId(request()->slidable_id)->whereHas('slides', function ($q) {
                return $q->active();
            })->with('slides')->get();
            $elements = $item->pluck('slides')->unique()->flatten();
        }
        return view('backend.modules.slide.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validate = validator(request()->all(), [
            'slidable_id' => 'required|numeric',
            'slidable_type' => 'required|alpha'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }
        return view('backend.modules.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'slidable_id' => 'required|numeric',
            'slidable_type' => 'required|alpha'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }
        $className = '\App\Models\\' . title_case($request->slidable_type);
        $item = new $className();
        $item = $item->withoutGlobalScopes()->whereId($request->slidable_id)->first();
        $element = $item->slides()->create($request->request->all());
        if ($element) {
            if ($request->hasFile('image')) {
                $this->saveMimes($element, $request, ['image'], ['1905', '750'], true);
            }
            if ($request->hasFile('path')) {
                $path = $request->file('path')->store('public/uploads/files');
                $path = str_replace('public/uploads/files/', '', $path);
                $element->update(['path' => $path]);
            }
            return redirect()->route('backend.slide.index',['slidable_id' => $element->slidable_id, 'slidable_type' => $element->slidable_type])->with('success', trans('message.store_success'));
        }
        return redirect()->back()->with('error', trans('message.store_error'));
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
        $element = Slide::whereId($id)->first();
        return view('backend.modules.slider.edit', compact('element'));
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
        $element = Slide::whereId($id)->first();
        $updated = $element->update($request->request->all());
        if ($updated) {
            if ($request->hasFile('image')) {
                $this->saveMimes($element, $request, ['image'], ['1905', '750'], true);
            }
            if ($request->hasFile('path')) {
                $path = $request->file('path')->store('public/uploads/files');
                $path = str_replace('public/uploads/files/', '', $path);
                $element->update(['path' => $path]);
            }
            return redirect()->route('backend.slider.index')->with('success', trans('message.update_success'));
        }
        return redirect()->back()->with('error', trans('message.update_error'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Slide::whereId($id)->first()->delete();
        if ($element) {
            return redirect()->back()->with('success', trans('message.delete_success'));
        }
        return rediret()->back() - with('error', trans('message.delete_error'));
    }
}
