@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penilaian</h1>

    <form action="{{ route('penilaian.update', $penilaian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_penilaian">Nama Penilaian</label>
            <input type="text" name="nama_penilaian" id="nama_penilaian" class="form-control" value="{{ old('nama_penilaian', $penilaian->nama_penilaian) }}" required>
            @error('nama_penilaian')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nilai" class="form-control" value="{{ old('nilai', $penilaian->nilai) }}" required>
            @error('nilai')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="4">{{ old('keterangan', $penilaian->keterangan) }}</textarea>
            @error('keterangan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Penilaian</button>
        <a href="{{ route('penilaian.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
