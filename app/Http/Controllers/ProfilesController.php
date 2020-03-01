<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findorFail($user);
        return view('home', [
            'user' => $user,
        ]);
    }
}
