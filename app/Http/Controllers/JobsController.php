<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Mitra;
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
            'cv' => 'required|file|mimes:pdf',
            'lowongans_id' => 'required'
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('file-cv');
        }

        Peminat_lowongan::create($validatedData);
        Alert::success('Sukses', 'Silahkan tunggu informasi selanjutnya untuk pemanggilan');
        return redirect('/');
    }
}
