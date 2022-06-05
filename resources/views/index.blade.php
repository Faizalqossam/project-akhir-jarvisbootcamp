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
@endsection
