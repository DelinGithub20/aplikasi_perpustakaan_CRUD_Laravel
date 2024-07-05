<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mendapatkan jumlah kategori
        $jumlahKategori = Kategori::count();

        // Mendapatkan jumlah buku
        $jumlahBuku = Buku::count();

        return view('home', compact('jumlahKategori', 'jumlahBuku'));
    }
}
