@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penggajian</h1>

    <form action="{{ route('penggajian.update', $penggajian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_karyawan">Nama Karyawan</label>
            <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" value="{{ old('nama_karyawan', $penggajian->nama_karyawan) }}" required>
            @error('nama_karyawan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="gaji_pokok">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok" class="form-control" value="{{ old('gaji_pokok', $penggajian->gaji_pokok) }}" required>
            @error('gaji_pokok')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tunjangan">Tunjangan</label>
            <input type="number" name="tunjangan" id="tunjangan" class="form-control" value="{{ old('tunjangan', $penggajian->tunjangan) }}" required>
            @error('tunjangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="potongan">Potongan</label>
            <input type="number" name="potongan" id="potongan" class="form-control" value="{{ old('potongan', $penggajian->potongan) }}" required>
            @error('potongan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Penggajian</button>
        <a href="{{ route('penggajian.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
