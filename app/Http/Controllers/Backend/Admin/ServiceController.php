<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use App\Models\Category;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Service::all();
        return view('backend.modules.service.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   return view('backend.modules.aboutus.create');
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $users = User::all();
        return view('backend.modules.service.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element = Aboutus::create($request->all());
        if ($element) {
            return redirect()->route('backend.aboutus.index')->with('success', 'Aboutus added');
        }
        return redirect()->back()->with('error', 'Aboutus is not saved.');
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
