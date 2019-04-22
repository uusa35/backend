<?php

namespace App\Http\Controllers\Backend\Admin;


use App\Models\Commercial;
use Illuminate\Http\Request;
use App\Core\PrimaryController;
use App\Core\Services\Image\PrimaryImageService;

use App\Http\Controllers\Controller;

use App\Http\Requests;

class CommercialController extends Controller
{
    public $commercial;
    public $image;

    public function __construct(Commercial $commercial)
    {
        $this->commercial = $commercial;
        //$this->image = $image;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commercials = $this->commercial->all();
        return view('backend.modules.commercial.index', compact('commercials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.commercial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $element = Commercial::create($request->except(['image']));
        if ($element) {
            $request->hasFile('image') ? $this->saveMimes($element, $request, ['image'], ['100', '140'], ['370', '550'], ['370', '550'], true) : null;
            return redirect()->route('backend.admin.commercial.index')->with('success', trans('general.commercial_added'));
        }
        return redirect()->back()->with('error', trans('general.commercial_not_added'));
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
    { }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->commercial->find($id)->delete()) {

            return redirect()->route('backend.commercial.index')->with('success', 'commercial Deleted Successfully!');
        }
        return redirect()->back()->with('error', 'System Error!!');

        //        \DB::table('commercials')->where('id', '=', request()->id)->delete();
        //        return redirect()->back()->with('success', 'Slide deleted');
    }
}
