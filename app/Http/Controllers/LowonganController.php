<?php

namespace App\Http\Controllers;

use App\Models\Bidang_usaha;
use App\Models\Lowongan;
use App\Models\Mitra;
use App\Models\Sektor_usaha;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganController extends Controller
{
    public function createMitra()
    {
        $bidang = Bidang_usaha::all();
        $sektor = Sektor_usaha::all();

        return view('admin.form.mitra', [
            'title' => "Form Input Mitra",
            'bidangs' => $bidang,
            'sektors' => $sektor
        ]);
    }

    public function inputMitra(Request $request)
    {

        $mitra = $request->validate([
            'nama' => 'required|min:10|max:30',
            'alamat' => 'required|min:20|max:100',
            'kontak' => 'required|min:10|max:20',
            'email' => 'required|email:dns',
            'telepon' => 'required|min:10|max:20',
            'web' => 'required',
            'bidang_usahas_id' => 'required',
            'sektor_usahas_id' => 'required'
        ]);

        Mitra::create($mitra);
        return redirect()->route('dashboard.input.bidang');
    }

    public function createBidangUsaha()
    {
        return view('admin.form.bidangusaha', [
            'title' => 'Form Input Bidang Usaha'
        ]);
    }

    public function inputBidangUsaha(Request $request)
    {



        // Bidang_usaha::create($bidang);
        // Sektor_usaha::create($sektor);

        return redirect()->route('dashboard.input.lowongan');
    }


    public function createLowongan()
    {
        return view('admin.form.lowongan', [
            'title' => "Form Input Lowongan"
        ]);
    }

    public function inputLowongan(Request $request)
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
        return redirect()->route('dashboard');
    }
}
