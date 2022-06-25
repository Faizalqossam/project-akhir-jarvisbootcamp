@extends('admin.layout.main')

@section('panel')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Input Pekerjaan</h4>
            </div>
            <form action="{{ route('dashboard.input.lowongan') }}" method="post">
                @csrf

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mitras_id">ID Mitra</label>
                                @foreach ($mitras as $mitra)
                                    <input type="text" name="mitras_id" id="mitras_id" class="form-control"
                                        value="{{ $mitra->id }}" placeholder="{{ $mitra->nama }}" disabled>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label for="loker">Nama Pekerjaan</label>
                                <input type="text" name="judul_lowongan"
                                    class="form-control @error('judul_lowongan') is-invalid @enderror"
                                    value="{{ old('judul_lowongan') }}" id="loker"
                                    placeholder="Masukan Nama Pekerjaan">
                                @error('judul_lowongan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    id="email" value="example@example.com">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">Tanggal Akhir Penerimaan</label>
                                <input type="date" name="tanggal_akhir"
                                    class="form-control @error('tanggal_akhir') is-invalid @enderror"
                                    value="{{ old('tanggal_akhir') }}" id="date">
                                @error('tanggal_akhir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Pekerjaan</label>
                                <textarea class="form-control @error('deskripsi_pekerjaan') is-invalid @enderror" name="deskripsi_pekerjaan"
                                    id="exampleFormControlTextarea1" rows="10"></textarea>
                                @error('deskripsi_pekerjaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-primary"
                                id="success">Sebarkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Form input pekerjaan end -->
@endsection
