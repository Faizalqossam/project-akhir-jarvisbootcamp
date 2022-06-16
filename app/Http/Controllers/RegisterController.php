<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
        $registerData = $request->validate([
            'firstName' => 'required|max:30|unique:users',
            'lastName' => 'required|max:70|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            'number' => 'required|max:13',
            'roles_id' => 'required'
        ]);

        $registerData['password'] = Hash::make($registerData['password']);

        User::create($registerData);

        Alert::success('Sukses', 'Register Akun Sukses');

        return redirect('/login');
    }
}
