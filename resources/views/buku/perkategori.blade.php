@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Buku untuk Kategori: {{ $kategori->nama }}</h1>

    <a href="{{ route('buku.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Judul Buku</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukuPerKategori as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
