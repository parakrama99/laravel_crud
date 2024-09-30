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
        return view('userpages.create',);
    }

    public function store(Request $request)
    {
      dd($request);
    }


}
