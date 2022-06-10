@extends('layouts.admin.main')

@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Pekerjaan</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="loker">Nama Pekerjaan</label>
                            <input type="text" class="form-control" id="loker" placeholder="Masukan Nama Pekerjaan">
                        </div>

                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" class="form-control" id="salary">
                        </div>

                        <div class="form-group">
                            <label for="Pendidikan">Pendidikan</label>
                            <input type="text" id="Pendidikan" class="form-control"
                                placeholder="Min. Pendidikan Terakhir">
                        </div>
                        <div class="form-group">
                            <label for="helpe"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="place">Penempatan</label>
                            <input type="text" class="form-control" id="place" placeholder="Penempatan Kerja">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pekerjaan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary btn-primary" id="success">Sebarkan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form input pekerjaan end -->
@endsection
