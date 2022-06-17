<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => "Login Page",
            'active' => "login"
        ]);
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required' | 'email:dns',
            'password' => 'required'
        ]);

        Alert::success('Sukses', 'Login Berhasil');
        dd('Login Berhasil');
    }
}
