@extends('components.admin-layout')


@section('title', 'Data Karyawan')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Data Karyawan</h2>
            <a href="/tambah-karyawan-view" class="btn btn-primary btn-custom">Tambah Karyawan</a>
            <a href="{{ route('karyawan.unduh-pdf') }}" class="btn btn-dark btn-custom">Unduh PDF</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-hover mt-3">
            <thead class="table-dark">
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
                            <a href="/edit-karyawan/{{ $karyawan->id }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
