<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\Peminat_lowongan;
use RealRashid\SweetAlert\Facades\Alert;

class JobsController extends Controller
{
    public function index()
    {

        return view('index', [
            'title' => "Sistem Loker",
            'lokers' => Lowongan::latest()->filter()->get()

        ]);
    }

    public function categoryJob()
    {
        return view('categoryJob', [
            'title' => "Kategori Pekerjaan",
        ]);
    }

    public function create()
    {
        return view(
            'work.index',
            [
                'title' => 'Lamar Pekerjaan',
                'lowongans' => Lowongan::all()
            ]
        );
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|max:32',
            'kontak' => 'required|max:13',
            'alamat' => 'required|max:50',
            'lowongans_id' => 'required'
        ]);

        Peminat_lowongan::create($validatedData);
        Alert::success('Sukses', 'Silahkan tunggu informasi selanjutnya untuk pemanggilan');
        return redirect('/');
    }
}
