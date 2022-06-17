@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Masuk ke Sistem Loker</h5>
                    <form action="/login" method="post">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus>
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                in</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-grid mb-2">
                        <a class="btn btn-login text-uppercase fw-bold" href="/register"><i
                                class="fa-solid fa-address-card"></i> Belum punya akun? Klik
                            Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
