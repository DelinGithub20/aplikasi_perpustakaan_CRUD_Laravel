@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Buku</h1>
        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ $buku->judul }}" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang:</label>
                <input type="text" name="pengarang" id="pengarang" class="form-control" value="{{ $buku->pengarang }}" required>
            </div>
            <div class="form-group">
                <label for="kategori_id">Kategori:</label>
                <select name="kategori_id" id="kategori_id" class="form-control" required>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->id }}" {{ $buku->kategori_id == $kat->id ? 'selected' : '' }}>{{ $kat->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
