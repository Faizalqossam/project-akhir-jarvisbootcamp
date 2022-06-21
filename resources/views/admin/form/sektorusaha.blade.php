@extends('admin.layout.main')


@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Sektor Usaha</h4>
            </div>
            <form action="{{ route('dashboard.input.sektor') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
