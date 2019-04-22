<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Requests\Backend\UserStore;
use App\Http\Requests\Backend\UserUpdate;
use App\Models\User;
use App\Models\Country;
use App\Models\Role;
use App\Services\Traits\ImageHelpers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    use ImageHelpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('user.view', auth()->user());
        if (request()->has('role_id')) {
            $elements = User::where('role_id', request('role_id'))->with('country')->get();
        } else {
            $elements = User::with('country')->get();
        }

        return view('backend.modules.user.index', compact('elements'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $roles = Role::all();
        $this->authorize('user.create');
        return view('backend.modules.user.create', compact('countries', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
        $element = User::create($request->except('image', 'bg', 'banner', 'path'));
        if ($element) {
            $request->hasFile('image') ? $this->saveMimes($element, $request, ['image'], ['1080', '1440'], true) : null;
            $request->hasFile('bg') ? $this->saveMimes($element, $request, ['bg'], ['1080', '1440'], true) : null;
            $request->hasFile('banner') ? $this->saveMimes($element, $request, ['banner'], ['1080', '1440'], true) : null;
            $request->hasFile('path') ? $this->savePath($request, $element) : null;
            return redirect()->route('backend.user.index')->with('success', trans('general.user_added'));
        }
        return redirect()->route('backend.user.create')->with('error', trans('general.user_not_added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = User::active()->whereId($id)->first();
        $this->authorize('user.view', $element);
        return response()->json($element, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = User::whereId($id)->with('balance')->first();
        $this->authorize('user.view', $element);
        return view('backend.modules.user.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id)
    {
        $element = User::whereId($id)->first();
        $updated = $element->update($request->except(['logo', 'bg', 'balance', 'user_id']));
        if ($updated) {
            $element->balance()->update(['points' => $request->balance]);
            if ($request->hasFile('logo')) {
                $this->saveMimes($element, $request, ['logo'], ['250', '250'], false);
            }
            if ($request->hasFile('bg')) {
                $this->saveMimes($element, $request, ['bg'], ['750', '1334'], false);
            }
            auth()->user()->isSuper ? $element->update(['balance' => request('balance')]) : null;
            return redirect()->route('backend.admin.user.index', ['role_id' => $element->role_id])->with('success', 'saved success');
        }
        return redirect()->back()->with('error', 'failure');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = User::whereId($id)->with('projects')->first();
        $roleId = $element->role_id;
        if (!$element->projects->isEmpoty()) {
            $element->softDelete();
            return route('backend.admin.user.index', ['role_id' => $roleId]);
        }
        return redirect()->back()->with('error', trans('message.user_is_not_deleted'));
    }

    public function getResetPassword(Request $request)
    {
        $validator = validator(request()->all(), [
            'email' => 'required|email|exists:users,email',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $email = $request->email;
        return view('auth.passwords.reset', compact('email'));
    }

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function postResetPassword(Request $request)
    {
        $validator = validator(request()->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInputs()->withErrors($validator);;
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->password = bcrypt(request()->password);
            $user->save();
            return redirect()->route('backend.admin.user.index', ['role_id' => $user->role_id])->with('success', 'password changed');
        }
        return redirect()->back()->with('error', 'error occurred')->withInputs();
    }

    public function sendNotification(Request $request)
    {
        $validator = validator(request()->all(), [
            'title' => 'required',
            'message' => 'required',
            'include_player_ids' => 'required|array'
        ]);

        if ($validator->fails()) {
            return redirect()->back() - withErrors($validator)->withInputs();
        }
        $this->notify(request('title'), request('message'), request('ids'));
    }
}
