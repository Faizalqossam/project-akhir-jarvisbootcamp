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
    public function index()
    {
        return view('admin.list', [
            'title' => "Halaman List Lowongan",
            'lowongans' => Lowongan::all()
        ]);
    }

    public  function editLowongan($id)
    {
        return view('admin.edit', [
            'title' => 'Edit Lowongan',
            'mitras' => Mitra::latest()->first(),
            'lowongans' => Lowongan::find($id)
        ]);
    }
    public function updateLowongan($id, Request $request)
    {
        $update = [
            'mitras_id' => $request->mitras_id,
            'judul_lowongan' => $request->judul_lowongan,
            'salary' => $request->salary,
            'email' => $request->email,
            'tanggal_akhir' => $request->tanggal_akhir,
            'deskripsi_pekerjaan' => $request->deskripsi_pekerjaan
        ];
        Lowongan::find($id)->update($update);
        Alert::success('Sukses', 'Update Lowongan Sukses');
        return redirect()->route('dashboard.list');
    }

    public function destroyLowongan($id)
    {
        Lowongan::destroy($id);
        return redirect()->route('dashboard.list');
    }
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
            'nama' => 'required|max:30',
            'alamat' => 'required|max:100',
            'kontak' => 'required|max:20',
            'email' => 'required|email:dns',
            'telepon' => 'required|max:20',
            'web' => 'required',
            'bidang_usahas_id' => 'required',
            'sektor_usahas_id' => 'required'
        ]);

        Mitra::create($mitra);
        return redirect()->route('dashboard.input.lowongan');
    }

    public function createLowongan()
    {

        //get latest id from Mitra model
        $mitra = Mitra::latest()->first();

        // return dd($mitra);

        return view('admin.form.lowongan', [
            'title' => "Form Input Lowongan",
            'mitras' => $mitra
        ]);
    }

    public function inputLowongan(Request $request)
    {
        $data = $request->validate([
            'mitras_id' => 'required',
            'salary' => 'required',
            'judul_lowongan' => 'required|max:50',
            'email' => 'required|email:dns',
            'tanggal_akhir' => 'required',
            'deskripsi_pekerjaan' => 'required|min:10'
        ]);


        Lowongan::create($data);
        Alert::success('Sukses', 'Input lowongan pekerjaan sukses');
        return redirect()->route('dashboard');
    }
}
