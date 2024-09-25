@extends('components.admin-layout')

@section('title', 'Data Absensi')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Data Absensi</h2>
        <a href="{{ url('/absensi/create') }}" class="btn btn-primary btn-lg">Tambah Absensi</a>
    </div>
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karyawan</th>
                <th>Tanggal</th>
                <th>Status</th>
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
                <td>
                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                    <form action="" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
