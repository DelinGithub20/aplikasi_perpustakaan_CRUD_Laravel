@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-3">Tambah Kategori</h1>
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Kategori</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <button type="submit" class="btn btn-success mt-4">Simpan</button>
        </form>
    </div>
@endsection
