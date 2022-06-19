<?php

namespace App\Http\Controllers;

use App\Models\Lowongan;
use App\Models\Mitra;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class LowonganController extends Controller
{
    public function createMitra()
    {
        return view('admin.form.mitra', [
            'title' => "Form Input Mitra"
        ]);
    }

    public function inputMitra(Request $request)
    {
        $mitra = $request->validate([
            'nama' => 'required|min:10|max:30',
            'alamat' => 'required|min:20|max:100',
            'kontak' => 'required|min:10|max:20|unique:Users',
            'telepon' => 'required|min:10|max:20|unique:Users',
            'web' => 'required|url'
        ]);

        Mitra::create($mitra);
        return redirect()->route('dashboard.');
    }

    public function createBidangUsaha()
    {
        return view('admin.form.bidangusaha', [
            'title' => 'Form Input Bidang Usaha'
        ]);
    }

    public function inputBidangUsaha(Request $request)
    {

        // code
    }

    public function createSektorUsaha()
    {
        return view('admin.form.sektorusaha', [
            'title' => 'Form Input Sektor Usaha'
        ]);
    }

    public function inputSektorUsaha(Request $request)
    {

        // code
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
