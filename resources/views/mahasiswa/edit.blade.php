<!-- resources/views/mahasiswa/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>NRP</label>
            <input type="text" name="nrp" class="form-control" value="{{ $mahasiswa->nrp }}" disabled>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
        </div>
        <div class="mb-3">
            <label>Program Studi</label>
            <select name="program_studi_id" class="form-control">
                @foreach($programStudi as $prodi)
                    <option value="{{ $prodi->id }}" {{ $mahasiswa->program_studi_id == $prodi->id ? 'selected' : '' }}>
                        {{ $prodi->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Angkatan</label>
            <input type="number" name="angkatan" class="form-control" value="{{ $mahasiswa->angkatan }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
