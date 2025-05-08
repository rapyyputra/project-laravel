@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Mahasiswa</h1>

    <!-- Tombol Tambah & Export -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Mahasiswa</a>
        <a href="{{ route('mahasiswa.export') }}" class="btn btn-success">Export Excel</a>
    </div>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Pencarian -->
    <form method="GET" action="{{ route('mahasiswa.index') }}" class="mb-3 d-flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama atau NRP..." class="form-control w-25">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>

    <!-- Tabel Data Mahasiswa -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nrp }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->programStudi->nama ?? '-' }}</td>
                    <td>{{ $mhs->angkatan }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data mahasiswa tidak ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
