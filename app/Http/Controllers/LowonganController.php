<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganController extends Controller
{
    public function index()
    {
        return view('form', [
            'title' => "Input Form Pekerjaan"
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'mitras_id' => 'required',
            'judul_lowongan' => 'required|max:50',
            'email' => 'required|email:dns',
            'tanggal_akhir' => 'required',
            'deskripsi_pekerjaan' => 'required|min:10|max:255'
        ]);


        Lowongan::create($data);
        Alert::success('Sukses', 'Input lowongan pekerjaan sukses');
        return redirect('/admin');
    }
}
