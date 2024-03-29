<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show(int $id)
    {
        if (!$user = User::find($id)) {

            return redirect()->route( 'users.index');
        };

        return view('users.show', compact('user'));
    }

    public function create(): View
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id)) {

            return redirect()->route( 'users.index');
        };

        return view('users.edit', compact('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route( 'users.index');
        };

        $data = $request->only('name', 'email');

        if ($request->password) {
            $data['password'] = hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }
}
