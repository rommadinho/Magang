@extends('components.admin-layout')


@section('content')
<div class="container">
    <h2>Data Penilaian</h2>
    <a href="{{ route('penilaian.create') }}" class="btn btn-primary mb-3">Tambah Penilaian</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penilaians as $penilaian)
                <tr>
                    <td>{{ $penilaian->nama_karyawan }}</td>
                    <td>{{ $penilaian->nilai }}</td>
                    <td>{{ $penilaian->keterangan }}</td>
                    <td>
                        <a href="{{ route('penilaian.edit', $penilaian->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('penilaian.destroy', $penilaian->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
