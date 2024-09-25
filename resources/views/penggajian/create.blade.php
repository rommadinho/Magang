@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Penggajian</h2>
    <form action="{{ route('penggajian.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tunjangan">Tunjangan</label>
            <input type="number" name="tunjangan" class="form-control">
        </div>
        <div class="form-group">
            <label for="potongan">Potongan</label>
            <input type="number" name="potongan" class="form-control">
        </div>
        <div class="form-group">
            <label for="total_gaji">Total Gaji</label>
            <input type="number" name="total_gaji" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
