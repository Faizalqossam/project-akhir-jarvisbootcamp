@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto g-2">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Daftar ke Sistem Loker</h5>
                    {{-- Form Register --}}
                    <form method="POST" action="/register" class="row g-2 needs-validation" enctype="multipart/form-data"
                        novalidate>
                        @csrf
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                placeholder="Nama Depan" required>
                            <label for="firstName">Nama depan</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nama Akhir"
                                required>
                            <label for="lastName">Nama Akhir</label>
                        </div>
                        <div class="d-gri">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail"
                                    placeholder="email@example.com" name="email" required>
                                <label for="floatingEmail">Email</label>
                            </div>
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="number" class="form-control" id="floatingNumber" placeholder="628xxxxxxxx"
                                required name="number">
                            <label for="floatingNumber">Nomor Hp</label>
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <select class="form-select" id="floatingRole" name="id_role" id="role" required>
                                <option selected>-- Pilih Disini --</option>
                                <option value="1">Mitra</option>
                                <option value="2">Pencari Kerja</option>
                            </select>
                            <label for="floatingRole">Daftar Sebagai</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Daftar
                                Akun</button>
                        </div>
                        <hr class="my-4">
                        <div class="d-grid mb-2">
                            <a href="/login" class="btn btn-login text-uppercase fw-bold"><i
                                    class="fa-solid fa-square-arrow-left"></i> Sudah Punya akun? Kembali
                                Yuk</a>
                        </div>
                    </form>
                    {{-- Form Register End --}}
                </div>
            </div>
        </div>
    </div>
@endsection
