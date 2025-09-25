<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Galeri Budaya - EthnoGring</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body { background: #f6fbfc; }
        .admin-header { position: sticky; top: 0; z-index: 100; background: #ffffff; border-bottom: 1px solid #e5e7eb; }
        .admin-header .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; }
        .admin-shell { display: grid; grid-template-columns: 240px 1fr; min-height: 100vh; }
        .admin-sidebar { background: #ffffff; border-right: 1px solid #e5e7eb; padding: 16px; position: sticky; top: 0; height: 100vh; }
        .nav-btn { width: 100%; text-align: left; margin-bottom: 8px; }
        .logout-form { margin-top: 16px; }
        @media (max-width: 992px) { .admin-shell { grid-template-columns: 1fr; } .admin-sidebar { position: static; height: auto; } }
    </style>
</head>
<body>

    <header class="admin-header py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="logo" height="28">
                <span>EthnoGring Admin</span>
            </div>
            <div class="text-muted small">Masuk sebagai: <?php echo e(Auth::user()->name ?? 'admin'); ?></div>
        </div>
    </header>

    <div class="admin-shell">
        <aside class="admin-sidebar">
            <div class="d-grid gap-2">
                <a class="btn btn-dark nav-btn" href="<?php echo e(url('/galeri-budaya-insert')); ?>">Galeri Budaya - Insert</a>
                <a class="btn btn-outline-dark nav-btn" href="<?php echo e(url('/dokumentasi-tradisi-insert')); ?>">Dokumentasi Tradisi - Insert</a>
                <form class="logout-form" method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-outline-danger w-100">Logout</button>
                </form>
            </div>
        </aside>

        <main>
            <div class="container mt-4">
                <h2>Tambah Galeri Budaya</h2>
                <hr>

                <form action="<?php echo e(route('galeri-budaya.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control <?php echo e($errors->has('judul') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('judul')); ?>" required>
                        <?php if($errors->has('judul')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('judul')); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select name="jenis" id="jenis" class="form-select <?php echo e($errors->has('jenis') ? 'is-invalid' : ''); ?>" required>
                            <option value="" disabled selected>-- Pilih Jenis --</option>
                            <option value="development" <?php echo e(old('jenis') == 'development' ? 'selected' : ''); ?>>development</option>
                            <option value="budaya" <?php echo e(old('jenis') == 'budaya' ? 'selected' : ''); ?>>budaya</option>
                            <option value="kolaborasi" <?php echo e(old('jenis') == 'kolaborasi' ? 'selected' : ''); ?>>kolaborasi</option>
                            <option value="aktivitas" <?php echo e(old('jenis') == 'aktivitas' ? 'selected' : ''); ?>>aktivitas</option>
                            <option value="umkm" <?php echo e(old('jenis') == 'umkm' ? 'selected' : ''); ?>>umkm</option>
                        </select>
                        <?php if($errors->has('jenis')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('jenis')); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="isi_kegiatan" class="form-label">Isi Kegiatan</label>
                        <textarea name="isi_kegiatan" id="isi_kegiatan" rows="4" class="form-control <?php echo e($errors->has('isi_kegiatan') ? 'is-invalid' : ''); ?>" placeholder="Tuliskan isi kegiatan"><?php echo e(old('isi_kegiatan')); ?></textarea>
                        <?php if($errors->has('isi_kegiatan')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('isi_kegiatan')); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto (opsional)</label>
                        <input type="file" name="foto" id="foto" class="form-control <?php echo e($errors->has('foto') ? 'is-invalid' : ''); ?>" accept="image/*">
                        <?php if($errors->has('foto')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('foto')); ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
