<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('index', [
            'title' => "Sistem Loker",
            'active' => "siloker"
        ]);
    }

    public function categoryJob()
    {
        return view('categoryJob', [
            'title' => "Kategori Pekerjaan",
            'active' => "loker-category"
        ]);
    }
}
