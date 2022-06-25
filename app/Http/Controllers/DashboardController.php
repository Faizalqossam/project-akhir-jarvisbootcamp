<?php

namespace App\Http\Controllers;

use App\Models\Peminat_lowongan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'title' => "Halaman Admin",
            'peminats' => Peminat_lowongan::all()
        ]);
    }
}
