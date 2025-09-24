<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Dokumentasi Tradisi - EthnoGring</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <h2>Tambah Dokumentasi Tradisi</h2>
        <hr>

        <form action="{{ route('dokumentasi-tradisi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul') }}" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <select name="jenis" id="jenis" class="form-select @error('jenis') is-invalid @enderror" required>
                    <option value="" disabled selected>-- Pilih Jenis --</option>
                    <option value="Tradisi" {{ old('jenis') == 'Tradisi' ? 'selected' : '' }}>Tradisi</option>
                    <option value="Budaya" {{ old('jenis') == 'Budaya' ? 'selected' : '' }}>Budaya</option>
                    <option value="Aktivitas" {{ old('jenis') == 'Aktivitas' ? 'selected' : '' }}>Aktivitas</option>
                    <option value="Travel" {{ old('jenis') == 'Travel' ? 'selected' : '' }}>Travel</option>
                </select>
                @error('jenis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="link_dokumentasi" class="form-label">Link Dokumentasi (opsional)</label>
                <input type="url" name="link_dokumentasi" id="link_dokumentasi" class="form-control @error('link_dokumentasi') is-invalid @enderror" value="{{ old('link_dokumentasi') }}" placeholder="https://contoh.com">
                @error('link_dokumentasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto (opsional)</label>
                <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                @error('foto')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>