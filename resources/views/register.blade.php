@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto g-2">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Daftar ke Sistem Loker</h5>
                    {{-- Form Register --}}
                    <form action="post" class="row g-2 needs-validation" enctype="multipart/form-data" novalidate>
                        @csrf
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                placeholder="Nama Depan">
                            <label for="firstName">Nama depan</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Nama Akhir">
                            <label for="lastName">Nama Akhir</label>
                        </div>
                        <div class="d-gri">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingEmail"
                                    placeholder="email@example.com" name="email">
                                <label for="floatingEmail">Email</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3 col-md-6">
                            <input type="password" class="form-control" id="floatingConfirmPassword"
                                placeholder="Confirm Password" name="confirmPass">
                            <label for="floatingPassword">Confirm Password</label>
                        </div>
                        <div class="form-floating col-md-6 mb-3">
                            <input type="file" class="form-control" id="floatingCV" name="CV">
                            <label for="floatingCV">CV</label>
                        </div>
                        <div class="form-floating col-md-6 mb-3">
                            <input type="number" class="form-control" id="floatingNumber" placeholder="628xxxxxxxx">
                            <label for="floatingNumber">Nomor Hp</label>
                        </div>
                        <div class="d-grid form-floating">
                            <select class="form-select" id="floatingRole" name="position" id="position">
                                <option selected>Klik Disini</option>
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
