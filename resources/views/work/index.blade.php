@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto g-2">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Form Pelamar Pekerjaan</h5>
                    {{-- Form Pelamar Pekerjaan --}}
                    <form method="post" action="{{ route('apply.work.input') }}" class="row g-2"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-grid form-floating mb-3">
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                id="nama" placeholder="Nama Lengkap" required value="{{ old('nama') }}" autofocus>
                            <label for="nama">Nama Lengkap</label>
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror"
                                id="kontak" placeholder="08xxxx" required>
                            <label for="kontak">No Telp</label>
                            @error('kontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                id="alamat" placeholder="08xxxx" required>
                            <label for="alamat">Alamat</label>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid form-floating mb-3">
                            <select class="form-select" id="lowongan" name="lowongans_id" id="lowongan" required>
                                <option selected>---Pilih Disini---</option>
                                @foreach ($lowongans as $lowongan)
                                    <option value="{{ $lowongan->id }}">{{ $lowongan->judul_lowongan }}</option>
                                @endforeach

                            </select>
                            <label for="role">Pilih Lowongan Yang Akan Diambil</label>

                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Submit</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-grid mb-2">
                        <a href="/login" class="btn btn-login text-uppercase fw-bold"><i
                                class="fa-solid fa-square-arrow-left"></i> Sudah Punya akun? Kembali
                            Yuk</a>
                    </div>
                    {{-- form lamar lowongan --}}
                </div>
            </div>
        </div>
    </div>
@endsection
