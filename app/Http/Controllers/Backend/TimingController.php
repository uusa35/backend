<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\TimingStore;
use App\Models\Day;
use App\Models\Service;
use App\Models\Timing;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('timing.index');
        $elements = Timing::whereHas('service', function ($q) {
            !request()->has('timing_id') ? $q->where('user_id', auth()->id()) : $q->where(['user_id' => auth()->id(), 'id' => request('id')]);
        })->get();
        return view('backend.modules.timing.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('timing.create');
        $services = auth()->user()->isAdminOrAbove ? Service::active()->get() : auth()->user()->services()->get();
        $users = User::active()->get();
        $days = Day::all();
        return view('backend.modules.timing.create', compact('services', 'users', 'days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TimingStore $request)
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
