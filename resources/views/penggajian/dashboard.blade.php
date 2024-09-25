@extends('components.admin-layout')


@section('content')
<div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Penggajian</h2>
            <a href="/tambah-penggajian-view" class="btn btn-primary btn-custom">Tambah Penggajian</a>
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
                            <th>Gaji_pokok</th>
                            <th>Tunjangan</th>
                            <th>potongan</th>
                            <th>total_gaji</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penggajians as $penggajian)
                            <tr>
                                <td>{{ $penggajian->id }}</td>
                                <td>{{ $penggajian->nama_karyawan }}</td>
                                <td>{{ $penggajian->alamat }}</td>
                                <td>{{ $penggajian->telepon }}</td>
                                <td>{{ $penggajian->jabatan->nama_jabatan }}</td>
                                <td>{{ $penggajian->departemen->nama_departemen }}</td>
                                <td>
                                    <a href="/edit-penggajian/{{ $penggajian->id }}" class="btn btn-warning btn-sm">
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