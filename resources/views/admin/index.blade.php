@extends('admin.layout.main')

@section('panel')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Peminat Lowongan</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Peminat Lowongan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Alamat</th>
                            <th>Lowongan Diminati</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminats as $peminat)
                            <tr>
                                <td>{{ $peminat->nama }}</td>
                                <td>{{ $peminat->kontak }}</td>
                                <td>{{ $peminat->alamat }}</td>
                                <td>{{ $peminat->lowongans->judul_lowongan }}</td>
                                <td>
                                    <a href="storage/{{ $peminat->cv }}"><span class="badge bg-success">Lihat
                                            CV</span></a>
                                    <a href="/dashboard/delete/{{ $peminat->id }}"
                                        onclick="return confirm('Apakah anda ingin menghapus pelamar ini?')"><span
                                            class="badge bg-danger">Delete</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
