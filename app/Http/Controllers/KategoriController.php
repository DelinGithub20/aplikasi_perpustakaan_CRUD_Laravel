<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
{
    $kategoris = Kategori::all(); // Mengambil semua kategori
    return view('kategori.index', compact('kategoris')); // Mengirim data kategori ke view
}

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:kategori',
        ]);

        Kategori::create($request->all());

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:kategori,nama,'.$id,
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Kategori::destroy($id);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }

    public function daftarBukuPerKategori($id)
{
    $kategori = Kategori::findOrFail($id);
    $bukus = Buku::where('kategori_id', $id)->get();

    return view('kategori.daftarbuku', compact('kategori', 'bukus'));
}

}


