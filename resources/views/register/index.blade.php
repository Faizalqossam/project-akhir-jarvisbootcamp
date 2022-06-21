@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto g-2">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Daftar ke Sistem Loker</h5>
                    {{-- Form Register --}}
                    <form method="post" action="/register" class="row g-2" enctype="multipart/form-data">
                        @csrf
                        <div class="d-grid form-floating mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Nama Lengkap" name="name" required value="{{ old('name') }}" autofocus>
                            <label for="name">Nama Lengkap</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="email@example.com" name="email" required value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <input type="text" name="number" class="form-control @error('number') is-invalid @enderror"
                                id="number" placeholder="628xxxxxxxx" required value="{{ old('number') }}">
                            <label for="number">Nomor Hp</label>
                            @error('number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid form-floating mb-3">
                            <select class="form-select" id="role" name="roles_id" id="role" required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <label for="role">Daftar Sebagai</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Daftar
                                Akun</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-grid mb-2">
                        <a href="/login" class="btn btn-login text-uppercase fw-bold"><i
                                class="fa-solid fa-square-arrow-left"></i> Sudah Punya akun? Kembali
                            Yuk</a>
                    </div>
                    {{-- Form Register End --}}
                </div>
            </div>
        </div>
    </div>
@endsection
