<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Mitra;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => "Sistem Loker",
            'lokers' => Lowongan::all()
            // 'mitras' => Mitra::all(),

        ]);
    }

    public function categoryJob()
    {
        return view('categoryJob', [
            'title' => "Kategori Pekerjaan",
        ]);
    }
}
