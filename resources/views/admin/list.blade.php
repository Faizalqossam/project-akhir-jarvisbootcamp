@extends('admin.layout.main')

@section('panel')
    <div class="page-heading">
        <h3>List Lowongan</h3>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Daftar Peminat Lowongan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>Nama Lowongan</th>
                            <th>Email</th>
                            <th>Tanggal Akhir</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lowongans as $lowongan)
                            <tr>
                                <td>{{ $lowongan->judul_lowongan }}</td>
                                <td>{{ $lowongan->email }}</td>
                                <td>{{ $lowongan->tanggal_akhir }}</td>
                                <td>
                                    <a href=""><span class="badge bg-success">View</span></a>
                                    <a href=""><span class="badge bg-warning">Update</span>
                                        <a href="/dashboard/list-loker/delete/{{ $lowongan->id }}"
                                            onclick="return confirm('Apakah anda ingin menghapus lowongan ini?')"><span
                                                class="badge bg-danger">Delete</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
