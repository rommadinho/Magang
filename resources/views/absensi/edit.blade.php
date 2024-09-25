@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Absensi</h1>

    <form action="{{ route('absensi.update', $absensi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="karyawan_id">Karyawan</label>
            <select name="karyawan_id" id="karyawan_id" class="form-control">
                @foreach($karyawans as $karyawan)
                <option value="{{ $karyawan->id }}" {{ $absensi->karyawan_id == $karyawan->id ? 'selected' : '' }}>
                    {{ $karyawan->nama }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $absensi->tanggal }}" required>
        </div>

        <div class="form-group">
            <label for="status_kehadiran">Status Kehadiran</label>
            <select name="status_kehadiran" id="status_kehadiran" class="form-control">
                <option value="Hadir" {{ $absensi->status_kehadiran == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Tidak Hadir" {{ $absensi->status_kehadiran == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

