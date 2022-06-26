<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
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

    public function list()
    {
        return view('admin.list', [
            'title' => "Halaman Admin",
            'lowongans' => Lowongan::all()
        ]);
    }

    public function destroyLowongan($id)
    {
        Lowongan::destroy($id);
        return redirect()->route('dashboard.list');
    }
}
