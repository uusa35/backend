<?php

namespace App\Http\Controllers\Backend\Admin;

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
        $elements = auth()->user()->isAdminOrAbove ? Timing::all() : Timing::active()->get();
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
