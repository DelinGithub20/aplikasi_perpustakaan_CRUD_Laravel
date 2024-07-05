@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Buku untuk Kategori: {{ $kategori->nama }}</h1>
        <a href="{{ route('kategori.index') }}" class="btn btn-primary mb-3">Kembali ke Daftar Kategori</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $buku)
                    <tr>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>
                            <!-- Aksi untuk buku seperti detail, edit, dan hapus -->
                            <a href="#" class="btn btn-primary btn-sm">Detail</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <form action="#" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
