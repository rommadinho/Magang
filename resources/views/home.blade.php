@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Selamat Datang di Sistem Informasi SDM RS Bhayangkara</h1>
        <p class="lead">Manajemen SDM yang efektif dan efisien untuk mendukung operasional rumah sakit.</p>
        <hr class="my-4">
        <p>Silakan gunakan menu di atas untuk mengelola karyawan, absensi, penilaian kinerja, dan penggajian.</p>
        <a class="btn btn-custom btn-lg" href="{{ url('/karyawan') }}" role="button">Kelola Karyawan</a>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Kelola Karyawan</h5>
                    <p class="card-text">Menambahkan, mengedit, dan menghapus data karyawan dengan mudah.</p>
                    <a href="{{ url('/karyawan') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Kelola Absensi</h5>
                    <p class="card-text">Catat absensi karyawan secara real-time.</p>
                    <a href="{{ url('/absensi') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-custom">
                <div class="card-body">
                    <h5 class="card-title">Kelola Penilaian</h5>
                    <p class="card-text">Penilaian kinerja karyawan yang terintegrasi.</p>
                    <a href="{{ url('/penilaian') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
