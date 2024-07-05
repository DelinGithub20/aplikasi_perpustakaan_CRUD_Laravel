<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        Buku::create($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $buku = Buku::with('kategori')->findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Buku::destroy($id);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }

    public function jumlah()
{
    $jumlahBuku = DB::table('buku')
        ->join('kategori', 'buku.kategori_id', '=', 'kategori.id')
        ->select('kategori.nama as kategori', DB::raw('count(buku.id) as jumlah'))
        ->groupBy('kategori.nama')
        ->get();
    
    return view('buku.jumlah', compact('jumlahBuku'));
}

public function perkategori($kategori_id)
{
    $kategori = Kategori::findOrFail($kategori_id);
    $bukuPerKategori = Buku::where('kategori_id', $kategori_id)->get();

    return view('buku.perkategori', compact('kategori', 'bukuPerKategori'));
}

}
