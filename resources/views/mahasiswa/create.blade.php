<!-- resources/views/mahasiswa/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mahasiswa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        
        <!-- Hidden user_id field (if using authentication) -->
        @auth
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @endauth

        <!-- NRP Field -->
        <div class="mb-3">
            <label class="form-label">NRP</label>
            <input type="text" 
                   name="nrp" 
                   class="form-control @error('nrp') is-invalid @enderror" 
                   value="{{ old('nrp') }}" 
                   required>
            @error('nrp')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Nama Field -->
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" 
                   name="nama" 
                   class="form-control @error('nama') is-invalid @enderror" 
                   value="{{ old('nama') }}" 
                   required>
            @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Program Studi Dropdown -->
        <div class="mb-3">
            <label class="form-label">Program Studi</label>
            <select name="program_studi_id" 
                    class="form-select @error('program_studi_id') is-invalid @enderror" 
                    required>
                <option value="">-- Pilih Program Studi --</option>
                @foreach($programStudi as $prodi)
                    <option value="{{ $prodi->id }}" {{ old('program_studi_id') == $prodi->id ? 'selected' : '' }}>
                        {{ $prodi->nama_prodi }}
                    </option>
                @endforeach
            </select>
            @error('program_studi_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Angkatan Field -->
        <div class="mb-3">
            <label class="form-label">Angkatan</label>
            <input type="number" 
                   name="angkatan" 
                   class="form-control @error('angkatan') is-invalid @enderror" 
                   value="{{ old('angkatan') }}" 
                   required>
            @error('angkatan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection