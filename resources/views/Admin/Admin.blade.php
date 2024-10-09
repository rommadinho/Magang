@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <p>Selamat datang, {{ Auth::user()->name }}!</p>

    <div class="row">
        <div class="col-md-4">
            <h3>Manajemen Karyawan</h3>
            <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Lihat Karyawan</a>
        </div>

        <div class="col-md-4">
            <h3>Manajemen Absensi</h3>
            <a href="{{ route('absensi.index') }}" class="btn btn-primary">Lihat Absensi</a>
        </div>

        <div class="col-md-4">
            <h3>Manajemen Penilaian</h3>
            <a href="{{ route('penilaian.index') }}" class="btn btn-primary">Lihat Penilaian</a>
        </div>

        <div class="col-md-4">
            <h3>Manajemen Penggajian</h3>
            <a href="{{ route('penggajian.index') }}" class="btn btn-primary">Lihat Penggajian</a>
        </div>
    </div>
</div>
@endsection
