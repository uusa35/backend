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
        $elements = Timing::all();
        return view('backend.modules.timing.index', compact('elements'));
    }

    public function create()
    {
        $services = Service::all();
        $users = User::all();
        $days = Day::all();
        return view('backend.modules.timing.create', compact('services', 'users', 'days'));
    }
}
