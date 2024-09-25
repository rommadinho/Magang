@extends('components.admin-layout')


@section('content')
<div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Penilaian</h2>
            <a href="/tambah-penilaian-view" class="btn btn-primary btn-custom">Tambah Penilaian</a>
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
                            <th>Nama_karyawan</th>
                            <th>nilai</th>
                            <th>keterangan</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penilaians as $penilaian)
                            <tr>
                                <td>{{ $penilaian->id }}</td>
                                <td>{{ $penilaian->nama }}</td>
                                <td>{{ $penilaian->nama }}</td>
                                <td>{{ $penilaian->nama }}</td>
                                <td>{{ $penilaian->alamat }}</td>
                                <td>{{ $penilaian->telepon }}</td>
                                <td>{{ $penilaian->jabatan->nama_jabatan }}</td>
                                <td>{{ $karyawan->departemen->nama_departemen }}</td>
                                <td>
                                    <a href="/edit-penilaian/{{ $penilaian->id }}" class="btn btn-warning btn-sm">
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