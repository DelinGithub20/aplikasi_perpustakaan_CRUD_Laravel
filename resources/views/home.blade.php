@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container-fluid">
        <h1 class="display-4">Selamat Datang di My Library!</h1>
        <p class="lead">Platform untuk mengelola koleksi buku perpustakaan secara efisien.</p>
        <hr class="my-4">
        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jumlah Kategori</h5>
                        <p class="card-text">{{ $jumlahKategori }}</p>
                        <a href="{{ route('kategori.index') }}" class="btn btn-light">Lihat Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jumlah Buku</h5>
                        <p class="card-text">{{ $jumlahBuku }}</p>
                        <a href="{{ route('buku.index') }}" class="btn btn-light">Lihat Buku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
