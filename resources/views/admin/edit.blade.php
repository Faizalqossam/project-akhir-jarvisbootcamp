@extends('admin.layout.main')

@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Pekerjaan</h4>
            </div>
            <form action="/dashboard/list-loker/update/{{ $lowongans->id }}" method="post">
                @csrf
                @method('PUT')

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mitras_id">ID Mitra</label>
                                <input type="text" name="mitras_id" id="mitras_id" class="form-control"
                                    value="{{ $mitras->id }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="loker">Nama Pekerjaan</label>
                                <input type="text" name="judul_lowongan" class="form-control" id="loker"
                                    value="{{ $lowongans->judul_lowongan }}">

                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="{{ $lowongans->email }}">

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Tanggal Akhir Penerimaan</label>
                                    <input type="date" name="tanggal_akhir" class="form-control" id="date"
                                        value="{{ $lowongans->tanggal_akhir }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pekerjaan</label>
                                    <textarea class="form-control" name="deskripsi_pekerjaan" id="exampleFormControlTextarea1" rows="10">{{ $lowongans->deskripsi_pekerjaan }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btn-primary" id="success">Update
                                    Lowongan</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </section>
    <!-- Form input pekerjaan end -->
@endsection
