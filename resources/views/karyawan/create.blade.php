@extends('layouts.app')

@section('content')
    <h1>Tambah Karyawan</h1>
    <form action="/proses-tambah-karyawan" method="POST">
        @csrf

        <!-- Input Nama Karyawan -->
        <div class="form-group">
            <label for="nama">Nama Karyawan</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
            @error('nama')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">No. Telepon</label>
            <input type="tel" name="telepon" id="nama" class="form-control" value="{{ old('nama') }}">
            @error('telepon')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10">{{ old('alamat') }}</textarea>
            @error('alamat')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Dropdown Jabatan -->
        <div class="form-group">
            <label for="jabatan">Pilih Jabatan</label>
            <select class="form-control" name="jabatan_id" id="jabatan" class="form-control" value="{{ old('nama') }}">
                <option value="">Pilih Jabatan</option>
                @foreach($jabatans as $jabatan)
                    <option value="{{ $jabatan->jabatan_id }}">{{ $jabatan->nama_jabatan }}</option>
                @endforeach
            </select>
            @error('jabatan_id')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Dropdown Departemen -->
        <div class="form-group">
            <label for="departemen">Pilih Departemen</label>
            <select class="form-control" name="departemen_id" id="departemen" class="form-control" value="{{ old('nama') }}">
                <option value="">Pilih Departemen</option>
                @foreach ($departemens as $departemen)
                    <option value="{{ $departemen->departemen_id }}">{{ $departemen->nama_departemen }}</option>
                @endforeach
            </select>
            @error('departemen_id')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
