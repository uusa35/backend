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
        if ($request->file('image')) {

            $image = $this->image->CreateImage($request->file('image'), ['100', '140'], ['370', '550'], ['370', '550']);
        }


        if ($image) {
            \DB::table('side_commercials')->insert([
                'image_path' => $image,
                'url' => $request->url,
                'caption_en' => $request->caption_en,
                'caption_ar' => $request->caption_ar,
                'order' => $request->order,
            ]);
            return redirect()->back()->with('success', 'commercial saved');
        }
        return redirect()->back()->with('error', 'commercial not saved')->withInputs();
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
