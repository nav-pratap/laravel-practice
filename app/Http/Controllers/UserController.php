<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getCreate()
    {
        return view('form');
    }
    public function postCreate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'hobby' => 'required',
        ]);
        return $request->all();
    }
}
