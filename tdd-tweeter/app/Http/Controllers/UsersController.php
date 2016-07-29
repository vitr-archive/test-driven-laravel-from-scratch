<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    public function show($username)
    {
        $user = User::findByUsername($username);
        return view('users.show', ['user' => $user]);
    }
}
