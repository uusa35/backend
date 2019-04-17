<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Timing;
use App\Models\Role;
use App\Models\User;
use App\Models\Day;
use App\Models\Service;

class TimingController extends Controller
{
    public function index()
    {
        $elements = Timing::whereHas('service', function ($q) {
            !request()->has('timing_id') ? $q->where('user_id', auth()->id()) : $q->where(['user_id' => auth()->id(), 'id' => request('id')]);
        })->get();
        return view('backend.modules.timing.index', compact('elements'));
    }

    public function create()
    {
        $services = auth()->user()->isAdminOrAbove ? Service::active()->get() : auth()->user()->services()->get();
        $users = User::active()->get();
        $days = Day::all();
        return view('backend.modules.timing.create', compact('services', 'users', 'days'));
    }
}
