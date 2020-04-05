<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Image::with('gallery')->get();
        return view('backend.modules.image.index', compact('elements'));
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
        $element = Image::whereId($id)->with('gallery')->first();
        return view('backend.modules.image.edit', compact('element'));
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
        if ($request->has('cover')) {
            $updated = Image::whereId($id)->first()->update(['cover' => 1]);
            $updated ?
                redirect()->back()->with('success', 'cover initialized for this album') : redirect()->back()->with('error', 'not updated !!!');
        }
        $element = Image::whereId($id)->first();
        $updated = $element->update($request->except('product_id'));
        if ($updated) {
            return redirect()->back()->with('success', 'image updated');
        }
        return redirect()->back()->with('error', 'not updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Image::whereId($id)->first();
        Storage::delete(asset('storage/img/uploads/thumbnail/' . $element->image));
        Storage::delete(asset('storage/img/uploads/medium/' . $element->image));
        Storage::delete(asset('storage/img/uploads/large/' . $element->image));
        $element->delete();
        return redirect()->back()->with('success', 'image deleted');
    }
}
