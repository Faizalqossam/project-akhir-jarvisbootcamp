@extends('layouts.main')

@section('content')
    <div class="row">
        <form action="/" sclass="row row-cols-lg-auto g-3 justify-content-center mt-2">
            <div class="input-group mt-4 mb-4">
                <input type="text" class="form-control" placeholder="Cari Pekerjaan" name="search">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </form>
    </div>

    @if ($lokers->count())
        @foreach ($lokers as $key => $loker)
            <div class="list-group mt-4" data-bs-toggle="modal" data-bs-target="#lokerInfo{{ $key }}"
                data-bs-aria-expanded="false" aria-controls="lokerInfo">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $loker->judul_lowongan }}</h5>
                        <small class="text-muted">Sampai : {{ $loker->tanggal_akhir }}</small>
                    </div>
                    <p class="text-muted">salary: {{ $loker->salary }}</p>
                    <p class="mb-1">{{ $loker->mitras->nama }}</p>
                    <p class="mb-1">{{ $loker->mitras->alamat }}</p>
                </a>
                <div class="modal fade" id="lokerInfo{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Informasi Lengkap</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group list-group-flush">
                                    <div class="list-group-item">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Deskripsi Pekerjaan</h5>
                                        </div>
                                        <p class="mb-1">{{ $loker->deskripsi_pekerjaan }}</p>
                                        <hr>
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">Kontak Perusahaan</h5>
                                        </div>
                                        <p class="mb-1">{{ $loker->email }}</p>
                                        <p class="mb-1">{{ $loker->mitras->telepon }}</p>
                                    </div>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                        class="bi bi-x-lg"></i> Close</button>
                                <a href="{{ route('apply.work') }}"class="btn btn-primary"><i class="bi bi-briefcase"></i>
                                    Lamar Pekerjaan</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    @else
        <div class="alert alert-danger">
            <strong>Tidak ditemukan!</strong> Belum ada lowongan yang anda cari.
        </div>
    @endif

@endsection
