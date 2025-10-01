<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dokumentasi Tradisi - EthnoGring</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <style>
            body { font-family: 'Raleway','Roboto',sans-serif; margin: 0; color: #333; overflow-x: hidden; }
            /* Header (same as dashboard utama) */
            .header { width: 100%; height: 98px; left: 0; top: 0; position: fixed; background: white; z-index: 1000; }
            .logo { left: 126px; top: 22px; position: absolute; color: #333333; font-size: 33.70px; font-family: Raleway; font-weight: 800; display: flex; align-items: center; gap: 10px; }
            .logo-image { width: 60px; height: 60px; margin-right: 10px; object-fit: contain; }
            .hamburger { width: 40px; height: 9px; left: 67px; top: 33px; position: absolute; background: rgba(0, 0, 0, 0.70); border-radius: 2px; }
            .hamburger:nth-child(2) { top: 45px; }
            .hamburger:nth-child(3) { top: 57px; }
            .page-offset { height: 98px; }

            /* Sidebar styles */
            .sidebar { position: fixed; top: 98px; left: 0; width: 25vw; max-width: 420px; min-width: 280px; height: calc(100vh - 98px); background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(2px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); transform: translateX(-100%); transition: transform 0.3s ease; z-index: 900; padding: 20px; }
            .sidebar.open { transform: translateX(0); }
            .sidebar-inner { display: flex; flex-direction: column; gap: 16px; }
            .sidebar-list { display: flex; flex-direction: column; gap: 12px; margin-top: 8px; }
            .sidebar-item { display: flex; align-items: center; gap: 12px; padding: 8px 6px; border-radius: 10px; transition: background 0.2s ease; cursor: pointer; }
            .sidebar-item:hover { background: rgba(0,0,0,0.04); }
            .sidebar-item img { width: 42px; height: 42px; object-fit: contain; }
            .sidebar-item span { color: #333333; font-size: 16px; font-family: Raleway; font-weight: 600; line-height: 22px; }

            /* Content */
            .container { max-width: 1200px; margin: 0 auto; padding: 24px 16px; }
            .title { font-family: Raleway; font-weight: 800; font-size: 48px; line-height: 63.98px; text-align: center; }
            .subtitle { font-family: Roboto; color: #666; font-weight: 600; font-size: 16px; line-height: 24px; text-align: center; margin-top: 8px; }
            .hero { width: 100%; height: 280px; object-fit: cover; border-radius: 12px; margin-top: 16px; }
            .grid { margin-top: 24px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
            .card { background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 3px 8px rgba(0,0,0,0.07); }
            .card img { width: 100%; height: 260px; object-fit: cover; }
            .meta { display: flex; gap: 10px; margin: 6px 0; font-family: Roboto; }
            .meta .tag { color: #333; font-size: 11px; font-weight: 700; text-transform: capitalize; }
            .meta .date { color: #999; font-size: 11px; font-weight: 500; }
            .card-title { color: #333; font-size: 20px; font-family: Raleway; font-weight: 700; line-height: 28px; }
            .card-link { margin-top: 12px; }
            .card-link a { color: #FF0000; font-size: 14px; font-family: Roboto; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: color 0.2s ease; }
            .card-link a:hover { color: #CC0000; text-decoration: underline; }
            .card-link a::before { content: "▶"; font-size: 12px; }
            
            /* Footer styles */
            .footer {
                width: 100%;
                background: white;
                padding: 40px 20px;
                position: relative;
                z-index: 10;
            }

            .footer-content {
                max-width: 1200px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .footer-logo {
                color: #333333;
                font-size: 33.70px;
                font-family: Raleway;
                font-weight: 800;
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .footer-social {
                display: flex;
                gap: 20px;
                align-items: center;
            }

            .social-icon {
                width: 40px;
                height: 40px;
                background: #2BA5B5;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 14px;
                font-family: Roboto;
                font-weight: 700;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .social-icon:hover {
                background: #258D9B;
                transform: translateY(-2px);
            }

            .footer-copyright {
                color: #150E06;
                font-size: 16px;
                font-family: Raleway;
                font-weight: 400;
                line-height: 24px;
            }
        </style>
    </head>
    <body>
        <!-- Header like dashboard utama -->
        <div class="header">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="logo">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="logo-image">
                EtnhoGring
            </div>
        </div>
        <!-- Sidebar with Dashboard item -->
        <aside id="sidebar" class="sidebar" aria-hidden="true">
            <div class="sidebar-inner">
                <div class="sidebar-list">
                    <div class="sidebar-item" onclick="window.location.href='<?php echo e(url('/')); ?>'">
                        <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Dashboard Utama">
                        <span>Dashboard Utama</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='<?php echo e(route('galeri.budaya')); ?>'">
                        <img src="<?php echo e(asset('images/galerilogo_budaya.png')); ?>" alt="Galeri Budaya">
                        <span>Galeri Budaya</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='<?php echo e(route('dokumentasi.tradisi')); ?>'">
                        <img src="<?php echo e(asset('images/dokum_tradisi.png')); ?>" alt="Dokumentasi Tradisi">
                        <span>Dokumentasi Tradisi</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='<?php echo e(route('contact')); ?>'">
                        <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Contact">
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page-offset"></div>

        <div class="container" style="margin-bottom: 200px;">
            <div class="title">Dokumentasi Tradisi Dan Promosi Desa Wisata</div>
            <div class="subtitle">Konten kreativ desa, layanan desa, video edukasi, Info desa wisata Desa Tlemang, Kecamatan ngimbang, Kabupaten Lamongan Provinsi Jawa Timur </div>

            <div class="grid" style="margin-bottom: 200px;">
                <?php $docs = \App\Models\DokumentasiTradisi::orderByDesc('created_at')->get(); ?>
                <?php foreach ($docs as $doc): ?>
                <?php
                    $basename = $doc->foto ? basename($doc->foto) : null;
                    $newsBase = rtrim(env('UPLOAD_BASE_PATH', public_path('images')), '/');
                    $newsPath = $basename ? $newsBase.'/news/'.$basename : null;
                    $img = ($newsPath && file_exists($newsPath))
                        ? asset('images/news/'.$basename)
                        : 'https://placehold.co/400x360';
                ?>
                <div class="card">
                    <img src="<?php echo e($img); ?>" alt="Card">
                    <div style="padding:16px;">
                        <div class="meta"><div class="tag"><?php echo e($doc->jenis); ?></div><div class="date"><?php echo e(optional($doc->created_at)->format('d F Y')); ?></div></div>
                        <div class="card-title"><?php echo e($doc->judul); ?></div>
                        <?php if($doc->link_dokumentasi): ?>
                        <div class="card-link">
                            <a href="<?php echo e($doc->link_dokumentasi); ?>" target="_blank" rel="noopener noreferrer">
                                Tonton di YouTube
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="logo-image">
                    EtnhoGring
                </div>
                
                <div class="footer-social">
                    <a href="https://x.com/desatlemang?s=21" class="social-icon" target="_blank" rel="noopener noreferrer">X</a>
                    <a href="https://www.facebook.com/share/16gb6wx9da/?mibextid=wwXIfr" class="social-icon" target="_blank" rel="noopener noreferrer">FB</a>
                    <a href="https://www.tiktok.com/@desa.tlemang?_t=ZS-8zlSGY10mZ8&_r=1" class="social-icon" target="_blank" rel="noopener noreferrer">TT</a>
                    <a href="https://www.instagram.com/desa.tlemang?igsh=MmlpMXU1Ym1wZXVp&utm_source=qr" class="social-icon" target="_blank" rel="noopener noreferrer">IG</a>
                </div>
                
                <div class="footer-copyright">© 2025. All Right Reserved</div>
            </div>
        </div>

        <script>
            // Toggle sidebar like dashboard utama
            (function() {
                const hamburgers = document.querySelectorAll('.header .hamburger');
                const sidebar = document.getElementById('sidebar');
                function toggleSidebar() {
                    const opened = sidebar.classList.toggle('open');
                    sidebar.setAttribute('aria-hidden', opened ? 'false' : 'true');
                }
                hamburgers.forEach(h => h.addEventListener('click', toggleSidebar));
                document.addEventListener('click', (e) => {
                    const isHamburger = e.target.classList.contains('hamburger');
                    if (!isHamburger && !sidebar.contains(e.target) && sidebar.classList.contains('open')) {
                        sidebar.classList.remove('open');
                        sidebar.setAttribute('aria-hidden', 'true');
                    }
                });
            })();
        </script>
    </body>
</html>


