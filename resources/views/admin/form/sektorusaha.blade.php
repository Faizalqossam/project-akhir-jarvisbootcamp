@extends('admin.layout.main')


@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Sektor Usaha</h4>
            </div>
            <form action="{{ route('dashboard.input.sektor') }}" method="post">
                @csrf
            </form>
        </div>
    </section>
@endsection
