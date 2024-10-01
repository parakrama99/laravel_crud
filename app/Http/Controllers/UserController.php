<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve all users
        return view('userpages.userview', compact('users'));
    }

    public function create()
    {
        return view('userpages.usercreate',);
    }

    public function store(Request $request)
    {
    // only this code to check from frontend
    // dd($request);
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|confirmed',
    ]);
    $user = User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> $request->password,
    ]);

    return back()->with('success', 'User created successfully!');


    }


}
