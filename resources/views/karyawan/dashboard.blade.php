@extends('components.admin-layout')

@section('content')
<div class="container mt-4">
    <h2>Data Karyawan</h2>

    <div class="d-flex align-items-center mb-3">
        <a href="{{ route('karyawan.create') }}" class="btn btn-success me-2">Tambah</a>
        <a href="{{ route('karyawan.unduh-pdf') }}" class="btn btn-info">Unduh PDF</a>
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
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $karyawan->id }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->alamat }}</td>
                                <td>{{ $karyawan->telepon }}</td>
                                <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
                                <td>{{ $karyawan->departemen->nama_departemen }}</td>
                                <td>
                                    <form action="" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <a href="/edit-karyawan/{{ $karyawan->id }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection