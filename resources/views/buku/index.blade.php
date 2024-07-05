@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-success mb-3">Tambah Buku</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $item)
                    <tr>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->pengarang }}</td> <!-- Tambah baris ini -->
                        <td>{{ $item->kategori->nama }}</td>
                        <td>
                            <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
