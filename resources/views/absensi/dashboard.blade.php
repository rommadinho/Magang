@extends('components.admin-layout')

@section('content')
<div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Data Absensi</h2>
            <a href="/tambah-absensi-view" class="btn btn-primary btn-custom">Tambah Absensi</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama karyawan</th>
                            <th>tanggal</th>
                            <th>status</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($absensis as $absensi)
                            <tr>
                                <td>{{ $absensi->id }}</td>
                                <td>{{ $absensi->karyawan->nama }}</td>
                                <td>{{ $absensi->tanggal }}</td>
                                <td>{{ $absensi->status }}</td>
                                <td>{{ $absensi->created_at }}</td>
                                <td>{{ $absensi->updated_at }}</td>
                                <td>
                                    <a href="/edit-absensi/{{ $absensi->id }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
    </div>
@endsection