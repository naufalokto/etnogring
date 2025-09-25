<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galeri Budaya - EthnoGring</title>
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
            /* Spacer to avoid header overlap when needed */
            .page-offset { height: 98px; }

            /* Sidebar styles (same as dashboard utama) */
            .sidebar { position: fixed; top: 98px; left: 0; width: 25vw; max-width: 420px; min-width: 280px; height: calc(100vh - 98px); background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(2px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); transform: translateX(-100%); transition: transform 0.3s ease; z-index: 900; padding: 20px; }
            .sidebar.open { transform: translateX(0); }
            .sidebar-inner { display: flex; flex-direction: column; gap: 16px; }
            .sidebar-list { display: flex; flex-direction: column; gap: 12px; margin-top: 8px; }
            .sidebar-item { display: flex; align-items: center; gap: 12px; padding: 8px 6px; border-radius: 10px; transition: background 0.2s ease; cursor: pointer; }
            .sidebar-item:hover { background: rgba(0,0,0,0.04); }
            .sidebar-item img { width: 42px; height: 42px; object-fit: contain; }
            .sidebar-item span { color: #333333; font-size: 16px; font-family: Raleway; font-weight: 600; line-height: 22px; }
        </style>
    </head>
    <body>
        <!-- Header copied from dashboard utama -->
        <div class="header">
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="logo">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="logo-image">
                EtnhoGring
            </div>
        </div>
        <!-- Sidebar (same as dashboard utama) -->
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
                </div>
            </div>
        </aside>
        <div class="page-offset"></div>

        <div style="width: 100%; height: 2700px; position: relative; background: #FAFAFA; overflow: hidden">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
                <?php $latest = \App\Models\GaleriBudaya::orderByDesc('created_at')->take(1)->first(); ?>
                <div style="display:flex; gap:24px; align-items:center; color:#333333; font-family:Roboto; line-height:30px; margin-bottom:8px;">
                    <div style="font-weight:700; font-size:20px; text-transform:uppercase;"><?php echo e(($latest->jenis ?? 'Budaya')); ?></div>
                    <div style="color:#999999; font-weight:500; font-size:20px;"><?php echo e(optional($latest?->created_at)->format('d F Y') ?? '16 Maret 2024'); ?></div>
                </div>
                <div style="margin-bottom:24px;">
                    <span style="color:#333333; font-size:48px; font-family:Raleway; font-style:italic; font-weight:400; line-height:63.98px;">Galeri Budaya</span>
                    <span style="color:#333333; font-size:48px; font-family:Raleway; font-weight:700; line-height:63.98px;"> <?php echo e($latest ? ' -'.($latest->title ?? '') : ' -Desa Tlemang, melaksanakan kegiatan budaya Mendhak Sanggring: Tradisi Warisan Leluhur '); ?> </span>
                </div>
                <?php
                    $heroUrl = 'https://placehold.co/1193x583';
                    if ($latest && $latest->foto) {
                        $basename = basename($latest->foto);
                        $galleryPath = public_path('images/gallery/'.$basename);
                        if (file_exists($galleryPath)) {
                            $heroUrl = asset('images/gallery/'.$basename);
                        }
                    }
                ?>
                <img style="width:100%; height:auto; max-height:583px; border-radius:45px; object-fit:cover;" src="<?php echo e($heroUrl); ?>" />

                <div style="margin-top:32px; text-align:justify; color:#666666; font-size:30px; font-family:Roboto; font-weight:600; line-height:45px;">
                    <?php echo e($latest?->isi_kegiatan ?? ''); ?>
                </div>

                <div style="margin-top:24px; text-align:justify; color:#333333; font-size:30px; font-family:Roboto; font-weight:600; line-height:45px;">
                    <!-- Placeholder extra paragraph kept to preserve design spacing -->
                </div>

                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:60px;">
                    <div style="color:#333333; font-size:48px; font-family:Raleway; font-weight:700; line-height:63.98px;">Pupolar Kegiatan</div>
                    <a href="#" style="padding:16px 48px; background:#59C4D2; border-radius:8px; color:white; font-size:20px; font-family:Roboto; font-weight:700; line-height:30px; text-decoration:none;">View All</a>
                </div>

                <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:24px; margin-top:24px;">
                    <?php $items = \App\Models\GaleriBudaya::orderByDesc('created_at')->skip(1)->take(9)->get(); ?>
                    <?php foreach ($items as $item): ?>
                    <?php
                        $imgUrl = 'https://placehold.co/405x322';
                        if ($item->foto) {
                            $basename = basename($item->foto);
                            $galleryPath = public_path('images/gallery/'.$basename);
                            if (file_exists($galleryPath)) {
                                $imgUrl = asset('images/gallery/'.$basename);
                            }
                        }
                    ?>
                    <div style="background:white; border-radius:16px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.08);">
                        <img src="<?php echo e($imgUrl); ?>" style="width:100%; height:322px; object-fit:cover;" alt="Card" />
                        <div style="padding:16px;">
                            <div style="display:flex; gap:12px; margin-bottom:8px; font-family:Roboto;">
                                <div style="color:#333333; font-size:12px; font-weight:700; text-transform:uppercase;"><?php echo e($item->jenis); ?></div>
                                <div style="color:#999999; font-size:12px; font-weight:500;"><?php echo e(optional($item->created_at)->format('d F Y')); ?></div>
                            </div>
                            <div style="color:#333333; font-size:24px; font-family:Raleway; font-weight:700; line-height:31.99px; text-transform:capitalize;"><?php echo e($item->title); ?></div>
                            <div style="margin-top:8px; color:#666666; font-size:16px; font-family:Roboto; font-weight:400; line-height:24px; overflow:hidden; display:-webkit-box; -webkit-line-clamp:3; -webkit-box-orient:vertical;"><?php echo e(Str::limit($item->isi_kegiatan, 160)); ?></div>
                            <div style="margin-top:8px; color:#1A646D; font-size:18px; font-family:Roboto; font-weight:700; text-decoration:underline;">Read More...</div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
        </div>

        <script>
            // Toggle sidebar with header hamburgers
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


