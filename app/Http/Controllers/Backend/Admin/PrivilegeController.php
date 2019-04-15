<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Privilege;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivilegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Privilege::with('roles')->get();
        return view('backend.modules.privilege.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('privilege.create');
        return view('backend.modules.privilege.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element = Privilege::create($request->all());
        if ($element) {
            return redirect()->route('backend.admin.privilege.index')->with('success', 'privilege saved.');
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
        $element = Privilege::whereId($id)->with('roles')->first();
        $this->authorize('privilege.view', $element);
        return view('backend.modules.privilege.show', compact('element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Privilege::whereId($id)->with('roles')->first();
        $this->authorize('privilege.update', $element);
        return view('backend.modules.privilege.edit', compact('element'));
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

        $element = Privilege::whereId($id)->with('roles')->first();
        $this->authorize('privilege.update', $element);
        $element->update($request->all());
        return redirect()->route('backend.admin.privilege.index')->with('success', 'privilege updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Privilege::whereId($id)->first();
        $element->delete();
        return redirect()->route('backend.admin.privilege.index')->with('success', 'privilege deleted successfully');
    }
}
