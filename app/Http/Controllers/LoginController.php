<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Validator;

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
        $roles_id = User::where('roles_id', '1');
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials) == $roles_id) {
            $request->session()->regenerate();
            Alert::success('Sukses', 'Login Berhasil');

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email yang anda masukan tidak terdaftar disini'
        ])->onlyInput('email');
    }
}
