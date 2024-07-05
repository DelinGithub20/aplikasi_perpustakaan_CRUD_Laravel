@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Jumlah Buku per Kategori</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Kategori</th>
                    <th scope="col">Jumlah Buku</th>
                    <th scope="col">Daftar Buku</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jumlahBuku as $item)
                    <tr>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td><a href="{{ route('buku.index', ['kategori_id' => $item->kategori_id]) }}">Lihat Daftar Buku</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
