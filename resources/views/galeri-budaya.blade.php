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
                <img src="{{ asset('images/logo.svg') }}" alt="EtnhoGring Logo" class="logo-image">
                EtnhoGring
            </div>
        </div>
        <!-- Sidebar (same as dashboard utama) -->
        <aside id="sidebar" class="sidebar" aria-hidden="true">
            <div class="sidebar-inner">
                <div class="sidebar-list">
                    <div class="sidebar-item" onclick="window.location.href='{{ url('/') }}'">
                        <img src="{{ asset('images/logo.svg') }}" alt="Dashboard Utama">
                        <span>Dashboard Utama</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('galeri.budaya') }}'">
                        <img src="{{ asset('images/galerilogo_budaya.png') }}" alt="Galeri Budaya">
                        <span>Galeri Budaya</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('dokumentasi.tradisi') }}'">
                        <img src="{{ asset('images/dokum_tradisi.png') }}" alt="Dokumentasi Tradisi">
                        <span>Dokumentasi Tradisi</span>
                    </div>
                </div>
            </div>
        </aside>
        <div class="page-offset"></div>

        <div style="width: 100%; height: 2700px; position: relative; background: #FAFAFA; overflow: hidden">
            <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 40px 20px;">
                <div style="display:flex; gap:24px; align-items:center; color:#333333; font-family:Roboto; line-height:30px; margin-bottom:8px;">
                    <div style="font-weight:700; font-size:20px;">Budaya</div>
                    <div style="color:#999999; font-weight:500; font-size:20px;">16 Maret 2024</div>
                </div>
                <div style="margin-bottom:24px;">
                    <span style="color:#333333; font-size:48px; font-family:Raleway; font-style:italic; font-weight:400; line-height:63.98px;">Galeri Budaya</span>
                    <span style="color:#333333; font-size:48px; font-family:Raleway; font-weight:700; line-height:63.98px;"> -Desa Tlemang, melaksanakan kegiatan budaya Mendhak Sanggring: Tradisi Warisan Leluhur </span>
                </div>
                <img style="width:100%; height:auto; max-height:583px; border-radius:45px; object-fit:cover;" src="https://placehold.co/1193x583" />

                <div style="margin-top:32px; text-align:justify; color:#666666; font-size:30px; font-family:Roboto; font-weight:600; line-height:45px;">Desa Tlemang, yang terletak di Kabupaten Lamongan, Jawa Timur, dikenal tidak hanya karena keindahan alamnya, tetapi juga karena kekayaan tradisi yang diwariskan secara turun-temurun. Salah satu tradisi yang masih lestari hingga kini adalah Mendhak Sanggring, sebuah acara adat yang menjadi simbol kebersamaan, religiusitas, dan penghormatan terhadap warisan leluhur. <br/> Acara ini digelar sebagai bentuk rasa syukur masyarakat atas karunia yang diberikan Tuhan Yang Maha Esa sekaligus menjadi media mempererat hubungan sosial. “Mendhak” sendiri memiliki makna mengundang atau mengumpulkan, sedangkan “Sanggring” merujuk pada salah satu jenis hidangan khas yang disajikan dalam tradisi ini. Kombinasi keduanya melahirkan ritual yang unik, di mana masyarakat saling berbagi makanan, doa, dan kebersamaan dalam suasana penuh makna.</div>

                <div style="margin-top:24px; text-align:justify; color:#333333; font-size:30px; font-family:Roboto; font-weight:600; line-height:45px;">Bagi pengunjung dari luar, Mendhak Sanggring menjadi daya tarik wisata budaya yang unik. Perpaduan antara sajian kuliner khas, kesenian, serta suasana kebersamaan membuat acara ini begitu berkesan. Melalui Mendhak Sanggring, Desa Tlemang membuktikan bahwa menjaga warisan budaya bukan hanya soal melestarikan masa lalu, tetapi juga merawat kebersamaan untuk masa depan.</div>

                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:60px;">
                    <div style="color:#333333; font-size:48px; font-family:Raleway; font-weight:700; line-height:63.98px;">Pupolar Kegiatan</div>
                    <a href="#" style="padding:16px 48px; background:#59C4D2; border-radius:8px; color:white; font-size:20px; font-family:Roboto; font-weight:700; line-height:30px; text-decoration:none;">View All</a>
                </div>

                <div style="display:grid; grid-template-columns: repeat(3, 1fr); gap:24px; margin-top:24px;">
                    <div style="background:white; border-radius:16px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.08);">
                        <img src="https://placehold.co/405x322" style="width:100%; height:322px; object-fit:cover;" alt="Card 1" />
                        <div style="padding:16px;">
                            <div style="display:flex; gap:12px; margin-bottom:8px; font-family:Roboto;">
                                <div style="color:#333333; font-size:12px; font-weight:700;">DEVELOPMENT</div>
                                <div style="color:#999999; font-size:12px; font-weight:500;">13 Januari 2025</div>
                            </div>
                            <div style="color:#333333; font-size:24px; font-family:Raleway; font-weight:700; line-height:31.99px; text-transform:capitalize;">Alokasi Perencanaan Anggaran Dana Desa 2024</div>
                            <div style="margin-top:8px; color:#666666; font-size:16px; font-family:Roboto; font-weight:400; line-height:24px;">Travelling in sea has many advantages. Some of the advantages of transporting goods by sea include: you can ship large volumes at costs</div>
                            <div style="margin-top:8px; color:#1A646D; font-size:18px; font-family:Roboto; font-weight:700; text-decoration:underline;">Read More...</div>
                        </div>
                    </div>

                    <div style="background:white; border-radius:16px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.08);">
                        <img src="https://placehold.co/405x322" style="width:100%; height:322px; object-fit:cover;" alt="Card 2" />
                        <div style="padding:16px;">
                            <div style="display:flex; gap:12px; margin-bottom:8px; font-family:Roboto;">
                                <div style="color:#333333; font-size:12px; font-weight:700;">DEVELOPMENT</div>
                                <div style="color:#999999; font-size:12px; font-weight:500;">18 Juni 2024</div>
                            </div>
                            <div style="color:#333333; font-size:24px; font-family:Raleway; font-weight:700; line-height:31.99px;">Upaya Pengembangan Wisata Religi</div>
                            <div style="margin-top:8px; color:#666666; font-size:16px; font-family:Roboto; font-weight:400; line-height:24px;">Bhujuk Pongkeng adalah destinasi wisata religi yang berada di Desa Aengbaja Raja Kecamatan Bluto Kabupaten Sumenep</div>
                            <div style="margin-top:8px; color:#1A646D; font-size:18px; font-family:Roboto; font-weight:700; text-decoration:underline;">Read More...</div>
                        </div>
                    </div>

                    <div style="background:white; border-radius:16px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.08);">
                        <img src="https://placehold.co/405x322" style="width:100%; height:322px; object-fit:cover;" alt="Card 3" />
                        <div style="padding:16px;">
                            <div style="display:flex; gap:12px; margin-bottom:8px; font-family:Roboto;">
                                <div style="color:#333333; font-size:12px; font-weight:700;">Kolaborasi</div>
                                <div style="color:#999999; font-size:12px; font-weight:500;">3 Juli 2025</div>
                            </div>
                            <div style="color:#333333; font-size:24px; font-family:Raleway; font-weight:700; line-height:31.99px;">Sinergitas dan Kolaborasi Penguatan Desa Wisata</div>
                            <div style="margin-top:8px; color:#666666; font-size:16px; font-family:Roboto; font-weight:400; line-height:24px;">Dalam upaya memperkuat tata kelola pemerintahan desa yang modern, inovatif, dan berbasis digital pendampingan telah sukses diselenggarakan di Balai Desa Aengbaja Raja.</div>
                            <div style="margin-top:8px; color:#1A646D; font-size:18px; font-family:Roboto; font-weight:700; text-decoration:underline;">Read More...</div>
                        </div>
                    </div>
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


