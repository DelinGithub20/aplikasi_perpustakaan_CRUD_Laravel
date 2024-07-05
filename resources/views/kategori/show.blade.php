<!-- resources/views/kategori/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Kategori</h1>
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p class="form-control">{{ $kategori->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Kategori</label>
            <p class="form-control">{{ $kategori->nama }}</p>
        </div>
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
