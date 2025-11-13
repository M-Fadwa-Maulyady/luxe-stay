<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use App\Models\Kategori;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class PenginapanController extends Controller
{
    public function index()
    {
        $penginapan = Penginapan::with(['kategori', 'fasilitas'])->get();
        return view('penginapan.index', compact('penginapan'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();
        return view('penginapan.create', compact('kategori', 'fasilitas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penginapan' => 'required',
            'kategori_id' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // upload gambar
        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('penginapan', 'public');
        }

        // create penginapan
        $penginapan = Penginapan::create([
            'nama_penginapan' => $request->nama_penginapan,
            'kategori_id' => $request->kategori_id,
            'detail' => $request->detail,
            'gambar' => $gambar
        ]);

        // simpan fasilitas ke pivot
        if ($request->has('fasilitas')) {
            $penginapan->fasilitas()->sync($request->fasilitas);
        }

        return redirect()->route('penginapan')->with('success', 'Penginapan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $penginapan = Penginapan::findOrFail($id);
        $kategori = Kategori::all();
        $fasilitas = Fasilitas::all();

        return view('penginapan.edit', compact('penginapan', 'kategori', 'fasilitas'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama_penginapan' => 'required',
        'kategori_id' => 'required',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2048'
    ]);

    $penginapan = Penginapan::findOrFail($id);

    $gambarBaru = $penginapan->gambar; // default pakai yang lama

    // Kalau user pilih gambar baru
    if ($request->hasFile('gambar')) {

        // Upload gambar baru terlebih dahulu
        $fileBaru = $request->file('gambar')->store('penginapan', 'public');

        // Jika upload berhasil → baru hapus gambar lama
        if ($fileBaru) {

            if ($penginapan->gambar && file_exists(public_path('storage/' . $penginapan->gambar))) {
                unlink(public_path('storage/' . $penginapan->gambar));
            }

            $gambarBaru = $fileBaru;
        }
    }

    // Update data
    $penginapan->update([
        'nama_penginapan' => $request->nama_penginapan,
        'kategori_id' => $request->kategori_id,
        'detail' => $request->detail,
        'gambar' => $gambarBaru
    ]);

    // Update fasilitas pivot
    $penginapan->fasilitas()->sync($request->fasilitas);

    return redirect()->route('penginapan')->with('success', 'Penginapan berhasil diperbarui!');
}


    public function destroy($id)
    {
        $penginapan = Penginapan::findOrFail($id);

        // hapus gambar fisik
        if ($penginapan->gambar && file_exists(public_path('storage/' . $penginapan->gambar))) {
            unlink(public_path('storage/' . $penginapan->gambar));
        }

        // hapus fasilitas pivot
        $penginapan->fasilitas()->detach();

        // hapus data
        $penginapan->delete();

        return redirect()->route('penginapan')->with('success', 'Penginapan berhasil dihapus!');
    }
}
