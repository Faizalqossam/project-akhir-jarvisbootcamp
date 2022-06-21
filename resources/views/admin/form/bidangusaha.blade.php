@extends('admin.layout.main')


@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Bidang Usaha</h4>
            </div>
            <form action="{{ route('dashboard.input.bidang') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="bidang">Bidang Usaha</label>
                                <input type="text" name="nama" id="bidang" class="mt-2 form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sektor">Sektor Usaha</label>
                                <input type="text" name="nama_sektor" id="sektor" class="mt-2 form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-primary-outline float-end">Input Form
                                Pekerjaan<i class="fa fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
