@extends('admin.layout.main')


@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Bidang Usaha</h4>
            </div>
            <form action="{{ route('dashboard.input.bidang') }}" method="post">
                @csrf
            </form>
        </div>
    </section>
@endsection
