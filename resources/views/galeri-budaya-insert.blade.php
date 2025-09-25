<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Galeri Budaya - EthnoGring</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700;800&family=Roboto:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { 
            background: #FAFAFA; 
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* Header (same as dashboard utama) */
        .header { 
            width: 100%; 
            height: 98px; 
            left: 0px; 
            top: 0px; 
            position: fixed; 
            background: white; 
            z-index: 1000; 
        }

        .logo { 
            left: 126px; 
            top: 22px; 
            position: absolute; 
            color: #333333; 
            font-size: 33.70px; 
            font-family: Raleway; 
            font-weight: 800; 
            word-wrap: break-word; 
            display: flex; 
            align-items: center; 
            gap: 10px; 
        }

        .logo-image { 
            width: 60px; 
            height: 60px; 
            margin-right: 10px; 
            object-fit: contain; 
        }

        /* Hamburger Menu */
        .hamburger { 
            width: 40px; 
            height: 9px; 
            left: 67px; 
            top: 33px; 
            position: absolute; 
            background: rgba(0, 0, 0, 0.70); 
            border-radius: 2px; 
        }

        .hamburger:nth-child(2) { 
            top: 45px; 
        }

        .hamburger:nth-child(3) { 
            top: 57px; 
        }

        /* Sidebar (same as dashboard utama) */
        .sidebar { 
            position: fixed; 
            top: 98px; 
            left: 0; 
            width: 25vw; 
            max-width: 420px; 
            min-width: 280px; 
            height: calc(100vh - 98px); 
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(2px); 
            box-shadow: 0 10px 30px rgba(0,0,0,0.15); 
            transform: translateX(-100%); 
            transition: transform 0.3s ease; 
            z-index: 900; 
            padding: 20px; 
        }
        .sidebar.open { 
            transform: translateX(0); 
        }
        .sidebar-inner { 
            display: flex; 
            flex-direction: column; 
            gap: 16px; 
        }
        .sidebar-title { 
            color: #333333; 
            font-size: 20px; 
            font-family: Raleway; 
            font-weight: 700; 
        }
        .sidebar-list { 
            display: flex; 
            flex-direction: column; 
            gap: 12px; 
            margin-top: 8px; 
        }
        .sidebar-item { 
            display: flex; 
            align-items: center; 
            gap: 12px; 
            padding: 8px 6px; 
            border-radius: 10px; 
            transition: background 0.2s ease; 
            cursor: pointer; 
        }
        .sidebar-item:hover { 
            background: rgba(0,0,0,0.04); 
        }
        .sidebar-item.active { 
            background: rgba(43, 165, 181, 0.1); 
        }
        .sidebar-item img { 
            width: 42px; 
            height: 42px; 
            object-fit: contain; 
        }
        .sidebar-item span { 
            color: #333333; 
            font-size: 16px; 
            font-family: Raleway; 
            font-weight: 600; 
            line-height: 22px; 
        }

        /* Main content styling based on Figma */
        .main-content {
            background: #FAFAFA;
            padding: 0;
            position: relative;
            margin-top: 98px; /* Account for fixed header */
        }

        /* Hero section */
        .hero-section {
            background: linear-gradient(135deg, #59C4D2 0%, #2BA5B5 100%);
            padding: 60px 0 80px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .hero-title {
            font-family: 'Raleway', sans-serif;
            font-size: 48px;
            font-weight: 800;
            line-height: 63.98px;
            color: #333333;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            font-weight: 600;
            line-height: 37.50px;
            color: #666666;
            margin-bottom: 30px;
        }

        .hero-tagline {
            font-family: 'Roboto', sans-serif;
            font-size: 35px;
            font-weight: 800;
            line-height: 52.50px;
            color: #1A646D;
            opacity: 0.7;
        }

        /* Stats section */
        .stats-section {
            padding: 40px 0;
            background: white;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .stat-card {
            background: #F53636;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 5px 4px 4px rgba(0, 0, 0, 0.25);
            height: 172px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .stat-card:nth-child(2) { background: #596BD2; }

        .stat-number {
            font-family: 'Raleway', sans-serif;
            font-size: 80px;
            font-weight: 700;
            line-height: 120px;
            color: white;
            margin-bottom: 10px;
        }

        .stat-label {
            font-family: 'Raleway', sans-serif;
            font-size: 25px;
            font-weight: 700;
            line-height: 37.50px;
            color: #1A646D;
        }

        /* Form section */
        .form-section {
            background: #59C4D2;
            border-radius: 16px;
            margin: 40px 20px;
            padding: 40px;
            position: relative;
        }

        .form-title {
            font-family: 'Raleway', sans-serif;
            font-size: 40px;
            font-weight: 700;
            line-height: 50px;
            color: white;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-label {
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            font-weight: 400;
            line-height: 37.50px;
            color: black;
            margin-bottom: 10px;
            display: block;
        }

        .form-label.required::after {
            content: " *";
            color: #FF0A0A;
        }

        .form-input {
            width: 100%;
            height: 55px;
            background: white;
            border: none;
            border-radius: 6px;
            padding: 0 15px;
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: black;
        }

        .form-input::placeholder {
            color: black;
            opacity: 0.7;
            font-style: italic;
        }

        .form-select {
            width: 100%;
            height: 55px;
            background: white;
            border: none;
            border-radius: 6px;
            padding: 0 15px;
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: black;
        }

        .form-textarea {
            width: 100%;
            height: 153px;
            background: white;
            border: none;
            border-radius: 6px;
            padding: 15px;
            font-family: 'Roboto', sans-serif;
            font-size: 25px;
            color: black;
            resize: vertical;
        }

        .form-textarea::placeholder {
            color: black;
            opacity: 0.7;
            font-style: italic;
        }

        .file-upload-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 10px;
        }

        .file-upload-btn {
            background: white;
            border: none;
            border-radius: 15px;
            padding: 10px 20px;
            font-family: 'Roboto', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: #1A646D;
            cursor: pointer;
            width: 150px;
            height: 37px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .file-info {
            font-family: 'Roboto', sans-serif;
            font-size: 23px;
            font-weight: 500;
            color: white;
        }

        .file-error {
            font-family: 'Roboto', sans-serif;
            font-size: 23px;
            font-weight: 400;
            color: #FF0000;
            margin-top: 5px;
        }

        .form-buttons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .btn-save {
            background: white;
            border: none;
            border-radius: 8px;
            padding: 6px 20px 8px 16px;
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            font-weight: 700;
            color: #2BA5B5;
            cursor: pointer;
        }

        .btn-cancel {
            background: #D9D9D9;
            border: none;
            border-radius: 8px;
            padding: 6px 20px 8px 16px;
            font-family: 'Raleway', sans-serif;
            font-size: 20px;
            font-weight: 500;
            color: black;
            cursor: pointer;
        }

        /* Footer section */
        .footer-section {
            background: linear-gradient(92deg, #59C4D2 0%, #2BA5B5 100%);
            padding: 60px 0;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .footer-title {
            font-family: 'Raleway', sans-serif;
            font-size: 52px;
            font-weight: 700;
            line-height: 48px;
            letter-spacing: 0.20px;
            margin-bottom: 30px;
        }

        .contact-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .contact-input {
            flex: 1;
            height: 56px;
            border: none;
            border-radius: 8px;
            padding: 0 15px;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            color: #5A7184;
        }

        .contact-input::placeholder {
            color: #5A7184;
        }

        .contact-btn {
            background: white;
            border: 2px solid white;
            border-radius: 8px;
            padding: 0 20px;
            font-family: 'Raleway', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: white;
            cursor: pointer;
            width: 166px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-description {
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 28px;
            margin-bottom: 30px;
        }

        .go-home-btn {
            background: #2BA5B5;
            border: none;
            border-radius: 8px;
            padding: 16px 48px;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: white;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .footer-bottom {
            background: white;
            padding: 40px 0;
            text-align: center;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .logo-text {
            font-family: 'Raleway', sans-serif;
            font-size: 33.70px;
            font-weight: 800;
            color: #333333;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: #2BA5B5;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 700;
        }

        .copyright {
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #150E06;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .hero-title { font-size: 36px; }
            .hero-subtitle { font-size: 20px; }
            .hero-tagline { font-size: 28px; }
            .stats-container { grid-template-columns: repeat(2, 1fr); }
            .form-title { font-size: 32px; }
            .footer-title { font-size: 40px; }
            .contact-form { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- Header (same as dashboard utama) -->
    <div class="header">
        <!-- Hamburger Menu -->
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        <div class="hamburger"></div>
        
        <!-- Logo -->
        <div class="logo">
            <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="logo-image">
            EtnhoGring
        </div>
    </div>

    <!-- Sidebar (slides from left) -->
    <aside id="sidebar" class="sidebar" aria-hidden="true">
        <div class="sidebar-inner">
            <div class="sidebar-list">
                <div class="sidebar-item active" onclick="window.location.href='<?php echo e(url('/galeri-budaya-insert')); ?>'">
                    <img src="<?php echo e(asset('images/galerilogo_budaya.png')); ?>" alt="Galeri Budaya">
                    <span>Galeri Budaya - Insert</span>
                </div>
                <div class="sidebar-item" onclick="window.location.href='<?php echo e(url('/dokumentasi-tradisi-insert')); ?>'">
                    <img src="<?php echo e(asset('images/dokum_tradisi.png')); ?>" alt="Dokumentasi Tradisi">
                    <span>Dokumentasi Tradisi - Insert</span>
                </div>
                <div class="sidebar-item" onclick="document.getElementById('logout-form').submit();">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logout">
                    <span>Logout</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- Hidden logout form -->
    <form id="logout-form" method="POST" action="<?php echo e(route('logout')); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>

        <main class="main-content">
            <!-- Hero Section -->
            <div class="hero-section">
                <div class="container">
                    <h1 class="hero-title">SISTEM PENGARSIPAN DAN ADMINISTRASI DESA</h1>
                    <p class="hero-subtitle">Pengelolaan data, kearsipan dokumentasi kegiatan Medhak Sanggring,<br/>Desa Tlemang, Kecamatan Ngimbang, Kabupaten Lamongan,<br/>Provinsi Jawa Timur</p>
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="hero-title">Data Base<br/>Kearsipan Desa Wisata</h2>
                        </div>
                        <div class="col-md-6 text-end">
                            <p class="hero-tagline">Maju Bersama Digitalisasi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="stats-section">
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-number">{{ \App\Models\GaleriBudaya::count() }}</div>
                        <div class="stat-label">Konten Galeri Budaya</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-number">{{ \App\Models\DokumentasiTradisi::count() }}</div>
                        <div class="stat-label">Konten Dokumentasi Tradisi</div>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="form-section">
                <div class="container">
                    <h2 class="form-title">Form Galeri Budaya</h2>

                <form action="<?php echo e(route('galeri-budaya.store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="judul" class="form-label">Judul Kegiatan [Heading]</label>
                            <input type="text" name="judul" id="judul" class="form-input <?php echo e($errors->has('judul') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('judul')); ?>" required>
                        <?php if($errors->has('judul')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('judul')); ?></div>
                        <?php endif; ?>
                    </div>

                        <div class="form-group">
                        <label for="jenis" class="form-label">Jenis</label>
                        <select name="jenis" id="jenis" class="form-select <?php echo e($errors->has('jenis') ? 'is-invalid' : ''); ?>" required>
                                <option value="" disabled selected>-Pilih-</option>
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

                        <div class="form-group">
                            <label for="tanggal_kegiatan" class="form-label">Tanggal Kegiatan</label>
                            <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-input <?php echo e($errors->has('tanggal_kegiatan') ? 'is-invalid' : ''); ?>" value="<?php echo e(old('tanggal_kegiatan')); ?>">
                            <?php if($errors->has('tanggal_kegiatan')): ?>
                                <div class="invalid-feedback"><?php echo e($errors->first('tanggal_kegiatan')); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <label for="isi_kegiatan" class="form-label">Isi Ringkas Kegiatan</label>
                            <textarea name="isi_kegiatan" id="isi_kegiatan" class="form-textarea <?php echo e($errors->has('isi_kegiatan') ? 'is-invalid' : ''); ?>" placeholder="Tuliskan artikel selengkapnya disini !"><?php echo e(old('isi_kegiatan')); ?></textarea>
                        <?php if($errors->has('isi_kegiatan')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('isi_kegiatan')); ?></div>
                        <?php endif; ?>
                    </div>

                        <div class="form-group">
                            <label for="foto" class="form-label required">Image</label>
                            <div class="file-upload-container">
                                <label for="foto" class="file-upload-btn">Pilih File</label>
                                <span class="file-info" id="file-info">tidak ada file yang dipilih</span>
                            </div>
                            <input type="file" name="foto" id="foto" class="form-control <?php echo e($errors->has('foto') ? 'is-invalid' : ''); ?>" accept="image/*" style="display: none;">
                        <?php if($errors->has('foto')): ?>
                            <div class="invalid-feedback"><?php echo e($errors->first('foto')); ?></div>
                        <?php endif; ?>
                    </div>

                        <div class="form-buttons">
                            <button type="submit" class="btn-save">Simpan</button>
                            <button type="button" class="btn-cancel" onclick="history.back()">Batal</button>
                        </div>
                </form>
                </div>
            </div>


            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-logo">
                        <div class="logo-text">EtnhoGring</div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#" class="social-link">FB</a>
                        <a href="#" class="social-link">IG</a>
                        <a href="#" class="social-link">LN</a>
                        <a href="#" class="social-link">YT</a>
                    </div>
                    
                    <div class="copyright">© 2025. All Right Reserved</div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        // Toggle sidebar via hamburger (same as dashboard utama)
        (function() {
            const hamburgers = document.querySelectorAll('.header .hamburger');
            const sidebar = document.getElementById('sidebar');
            function toggleSidebar() {
                const opened = sidebar.classList.toggle('open');
                sidebar.setAttribute('aria-hidden', opened ? 'false' : 'true');
            }
            hamburgers.forEach(h => h.addEventListener('click', toggleSidebar));

            // Close when clicking outside sidebar
            document.addEventListener('click', (e) => {
                const isHamburger = e.target.classList.contains('hamburger');
                if (!isHamburger && !sidebar.contains(e.target) && sidebar.classList.contains('open')) {
                    sidebar.classList.remove('open');
                    sidebar.setAttribute('aria-hidden', 'true');
                }
            });
        })();

        // File upload functionality
        document.getElementById('foto').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const fileInfo = document.getElementById('file-info');
            
            if (file) {
                fileInfo.textContent = file.name;
                fileInfo.style.color = 'white';
            } else {
                fileInfo.textContent = 'tidak ada file yang dipilih';
                fileInfo.style.color = 'white';
            }
        });

        // Form validation
        document.querySelector('form').addEventListener('submit', function(e) {
            const requiredFields = ['judul', 'jenis', 'isi_kegiatan'];
            let isValid = true;
            
            requiredFields.forEach(function(fieldName) {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#FF0000';
                } else {
                    field.style.borderColor = '';
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi');
            }
        });
    </script>
</body>
</html>
