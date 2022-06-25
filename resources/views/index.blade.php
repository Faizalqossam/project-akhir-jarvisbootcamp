@extends('layouts.main')

@section('content')
    <form class="row row-cols-lg-auto g-3 justify-content-center mt-2">
        <div class="col-lg-6">
            <input type="text" class="form-control" placeholder="Cari Pekerjaan Idaman">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" style="--bs-bg-opacity: .5"><i class="bi bi-search-heart">
                    Submit</i></button>
        </div>
    </form>

    @foreach ($lokers as $loker)
        <div class="list-group mt-4">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $loker->judul_lowongan }}</h5>
                    <small class="text-muted">Sampai : {{ $loker->tanggal_akhir }}</small>
                </div>
                <p class="mb-1">{{ $loker->mitras->nama }}</p>
                <p class="mb-1">{{ $loker->mitras->alamat }}</p>
            </a>

        </div>
    @endforeach
@endsection
