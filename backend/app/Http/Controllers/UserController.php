<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        return view('profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}