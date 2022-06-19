<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {

        $lowongans = Lowongan::all();
        return view('index', [
            'title' => "Sistem Loker",
            'lokers' => $lowongans

        ]);
    }

    public function categoryJob()
    {
        return view('categoryJob', [
            'title' => "Kategori Pekerjaan",
        ]);
    }
}
