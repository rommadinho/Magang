@extends('components.admin-layout')


@section('title', 'Data Penggajian')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Data Penggajian</h2>
        <a href="{{ url('/penggajian/create') }}" class="btn btn-primary btn-lg">Tambah Penggajian</a>
    </div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama_Karyawan</th>
                <th>Potongan</th>
                <th>Gaji_Pokok</th>
                <th>Tunjangan</th>
                <th>Total Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penggajians as $penggajian)
            <tr>
                <td>{{ $penggajian->id }}</td>
                <td>{{ $penggajian->nama_karyawan }}</td>
                <td>{{ $penggajian->periode }}</td>
                <td>{{ $penggajian->gaji_pokok }}</td>
                <td>{{ $penggajian->tunjangan }}</td>
                <td>{{ $penggajian->total_gaji }}</td>
                <td>
                    <a href="{{ route('penggajian.edit', $penggajian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('penggajian.destroy', $penggajian->id) }}" method="POST" class="d-inline">
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
