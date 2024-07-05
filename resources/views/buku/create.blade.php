@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Buku</h1>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" name="judul" id="judul" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select name="kategori_id" id="kategori_id" class="form-control" required>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}">{{ $kat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
