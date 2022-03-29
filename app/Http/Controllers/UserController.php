<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $data = $request->all();
        $data = ['password'];

        User::create($request->all());

        return redirect()->route('users.index');
        // return redirect()->route('users.show', $user->id)
    }
}
