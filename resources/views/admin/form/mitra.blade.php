@extends('admin.layout.main')


@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Mitra</h4>
            </div>
            <form action="{{ route('dashboard.input.mitra') }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Mitra</label>
                                <input type="text" name="nama" id="nama"
                                    class="form-control @error('nama') is-invalid @enderror" placeholder="PT/CV"
                                    value="{{ old('nama') }}"required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Perusahaan</label>
                                <input type="text" name="alamat" id="alamat"
                                    class="form-control @error('alamat') is-invalid @enderror" placeholder="Jalan."
                                    value="{{ old('alamat') }}"required>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak Perusahaan</label>
                                <input type="text" name="kontak" id="kontak"
                                    class="form-control @error('kontak') is-invalid @enderror"
                                    value="{{ old('kontak') }}"required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" name="telepon" id="telepon" placeholder="021"
                                    class="form-control @error('telepon') is-invalid @enderror"
                                    value="{{ old('telepon') }}" required>
                                @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="web">Web Perusahaan</label>
                                <input type="text" name="web" id="web"
                                    class="form-control @error('web') is-invalid @enderror" value="{{ old('web') }}"
                                    required>
                                @error('web')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="mt-5 btn btn-outline-primary btn-primary float-end">Form Input
                                Bidang
                                Usaha
                                <i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
