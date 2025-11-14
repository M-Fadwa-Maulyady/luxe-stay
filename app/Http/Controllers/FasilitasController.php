<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required'
        ]);

        // Ambil kode terakhir dari database
        $last = Fasilitas::orderBy('id', 'desc')->first();

        // Jika belum ada data, mulai dari 1
        $nextNumber = $last ? ((int) substr($last->kode_fasilitas, 2)) + 1 : 1;

        // Buat kode auto: KT001, KT002, dst
        $kode = 'FP' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

        // Simpan data
        Fasilitas::create([
            'kode_fasilitas' => $kode,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]);

        return redirect()->route('fasilitas')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_fasilitas' => 'required',
            'nama_fasilitas' => 'required'
        ]);

        $fasilitas = Fasilitas::findOrFail($id);

        $fasilitas->update([
            'kode_fasilitas' => $request->kode_fasilitas,
            'nama_fasilitas' => $request->nama_fasilitas
        ]);

        return redirect()->route('fasilitas')->with('success', 'Fasilitas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();

        return redirect()->route('fasilitas')->with('success', 'Fasilitas berhasil dihapus!');
    }
}
