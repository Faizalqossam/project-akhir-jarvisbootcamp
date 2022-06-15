<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => "Register Page",
            'active' => "register"
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:70',
            'email' => 'required|email:dns|unique:email',
            'password' => 'required|min:6|max:12',
            'id_role' => 'required'
        ]);

        dd($validate);
        // return $request->all();
    }
}
