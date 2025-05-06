<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use App\Models\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Mahasiswa::with('user', 'programStudi');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%{$search}%")
                  ->orWhere('nrp', 'like', "%{$search}%");
            });
        }

        $mahasiswa = $query->get();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $users = User::all();
        $programStudi = ProgramStudi::all();

        return view('mahasiswa.create', compact('users', 'programStudi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nrp' => 'required|unique:mahasiswa,nrp',
            'nama' => 'required|string|max:255',
            'program_studi_id' => 'required|exists:program_studi,id',
            'angkatan' => 'required|integer|min:2000|max:' . date('Y'),
        ]);

        Mahasiswa::create([
            'user_id' => $request->user_id,
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'program_studi_id' => $request->program_studi_id,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $users = User::all();
        $programStudi = ProgramStudi::all();

        return view('mahasiswa.edit', compact('mahasiswa', 'users', 'programStudi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nrp' => 'required|unique:mahasiswa,nrp,' . $id,
            'nama' => 'required|string|max:255',
            'program_studi_id' => 'required|exists:program_studi,id',
            'angkatan' => 'required|integer|min:2000|max:' . date('Y'),
        ]);

        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update([
            'user_id' => $request->user_id,
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'program_studi_id' => $request->program_studi_id,
            'angkatan' => $request->angkatan,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil diupdate.');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
