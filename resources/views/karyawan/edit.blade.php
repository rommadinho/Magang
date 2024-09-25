@extends('layouts.app')

@section('content')
    <h1>Tambah Karyawan</h1>
    <form action="/proses-edit-karyawan/{{ $karyawans->id }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Input Nama Karyawan -->
        <div class="form-group">
            <label for="nama">Nama Karyawan</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $karyawans->nama }}">
            @error('nama')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">No. Telepon</label>
            <input type="tel" name="telepon" id="nama" class="form-control" value="{{ $karyawans->telepon }}">
            @error('telepon')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea class="form-control" name="alamat" id="" cols="30" rows="10">{{ $karyawans->alamat }}</textarea>
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
                    <option value="{{ $jabatan->jabatan_id }}"
                        {{ old('jabatan_id') == $jabatan->jabatan_id || (isset($karyawans) && $karyawans->id == $jabatan->jabatan_id) ? 'selected' : '' }}>
                        {{ $jabatan->nama_jabatan }}
                    </option>
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
                <option value="{{ $departemen->departemen_id }}"
                        {{ old('departemen_id') == $departemen->departemen_id || (isset($karyawans) && $karyawans->id == $departemen->departemen_id) ? 'selected' : '' }}>
                        {{ $departemen->nama_departemen }}
                    </option>
                @endforeach
            </select>
            @error('departemen_id')
                <small class="form-text text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
