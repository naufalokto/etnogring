<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - EtnhoGring</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800&family=Radio+Canada:wght@500&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Raleway', 'Radio Canada', sans-serif; margin: 0; color: #333; overflow-x: hidden; }
        /* Header (same as dashboard utama) */
        .header { width: 100%; height: 98px; left: 0; top: 0; position: fixed; background: white; z-index: 1000; }
        .logo { left: 126px; top: 22px; position: absolute; color: #333333; font-size: 33.70px; font-family: Raleway; font-weight: 800; display: flex; align-items: center; gap: 10px; }
        .logo-image { width: 60px; height: 60px; margin-right: 10px; object-fit: contain; }
        .hamburger { width: 40px; height: 9px; left: 67px; top: 33px; position: absolute; background: rgba(0, 0, 0, 0.70); border-radius: 2px; }
        .hamburger:nth-child(2) { top: 45px; }
        .hamburger:nth-child(3) { top: 57px; }

        /* Sidebar (same as dashboard utama) */
        .sidebar { position: fixed; top: 98px; left: 0; width: 25vw; max-width: 420px; min-width: 280px; height: calc(100vh - 98px); background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(2px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); transform: translateX(-100%); transition: transform 0.3s ease; z-index: 900; padding: 20px; }
        .sidebar.open { transform: translateX(0); }
        .sidebar-inner { display: flex; flex-direction: column; gap: 16px; }
        .sidebar-list { display: flex; flex-direction: column; gap: 12px; margin-top: 8px; }
        .sidebar-item { display: flex; align-items: center; gap: 12px; padding: 8px 6px; border-radius: 10px; transition: background 0.2s ease; cursor: pointer; }
        .sidebar-item:hover { background: rgba(0,0,0,0.04); }
        .sidebar-item img { width: 42px; height: 42px; object-fit: contain; }
        .sidebar-item span { color: #333333; font-size: 16px; font-family: Raleway; font-weight: 600; line-height: 22px; }

        .page-offset { height: 98px; }

        /* Contact layout */
        .container { max-width: 1200px; margin: 0 auto; padding: 40px 20px; }
        .contact-header { text-align: center; margin-top: 24px; }
        .contact-title { font-weight: 800; font-size: 56px; line-height: 1.1; margin: 0 0 8px 0; }
        .contact-subtitle { color: #777; font-weight: 700; font-size: 20px; margin: 0 0 32px 0; }
        .contact-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 24px; align-items: stretch; }
        .contact-card { background: linear-gradient(134deg, #2EADBE 0%, #5FB6C1 46%, #155058 100%); border-radius: 16px; box-shadow: 3px 1px 43px rgba(124, 78, 228, 0.04); padding: 32px 24px; color: white; text-align: center; display: flex; flex-direction: column; justify-content: center; gap: 12px; }
        .contact-icon { width: 70px; height: 70px; background: white; border-radius: 9999px; margin: 0 auto; display: flex; align-items: center; justify-content: center; }
        .contact-icon img { width: 24px; height: 24px; object-fit: contain; }
        .contact-card-title { font-weight: 700; font-size: 22px; margin-top: 6px; }
        .contact-card-text { font-family: 'Radio Canada', sans-serif; font-weight: 500; font-size: 16px; line-height: 28px; opacity: 0.95; }
        .home-btn-wrap { text-align: center; margin: 40px 0 60px 0; }
        .home-btn { display: inline-block; padding: 16px 48px; background: #2BA5B5; color: white; text-decoration: none; border-radius: 8px; font-weight: 700; }

        /* Footer (reuse style from public pages) */
        .footer { width: 100%; background: white; padding: 60px 20px; position: relative; z-index: 10; border-top: 1px solid rgba(0,0,0,0.08); margin-top: 40px; }
        .footer-content { max-width: 1200px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 30px; }
        .footer-logo { color: #333333; font-size: 33.70px; font-family: Raleway; font-weight: 800; display: flex; align-items: center; gap: 10px; }
        .footer-social { display: flex; gap: 20px; align-items: center; }
        .social-icon { width: 40px; height: 40px; background: #2BA5B5; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 16px; font-family: Raleway; font-weight: 700; }
        .footer-copyright { color: #150E06; font-size: 16px; font-family: Raleway; font-weight: 400; line-height: 24px; }

        @media (max-width: 900px) {
            .contact-grid { grid-template-columns: 1fr; }
            .contact-title { font-size: 40px; }
        }
    </style>
</head>
<body>
<!-- Header (same as dashboard utama) -->
<div class="header">
    <div class="hamburger"></div>
    <div class="hamburger"></div>
    <div class="hamburger"></div>
    <div class="logo">
        <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="logo-image">
        EtnhoGring
    </div>
</div>

<!-- Sidebar (slides from left) -->
<aside id="sidebar" class="sidebar" aria-hidden="true">
    <div class="sidebar-inner">
        <div class="sidebar-list">
            <div class="sidebar-item" onclick="window.location.href='{{ route('galeri.budaya') }}'">
                <img src="<?php echo e(asset('images/galerilogo_budaya.png')); ?>" alt="Galeri Budaya">
                <span>Galeri Budaya</span>
            </div>
            <div class="sidebar-item" onclick="window.location.href='{{ route('dokumentasi.tradisi') }}'">
                <img src="<?php echo e(asset('images/dokum_tradisi.png')); ?>" alt="Dokumentasi Tradisi">
                <span>Dokumentasi Tradisi</span>
            </div>
            <div class="sidebar-item" onclick="window.location.href='{{ route('admin.login') }}'">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Admin Login">
                <span>Admin Login</span>
            </div>
            <!-- Intentionally no "Contact Us" item on the Contact page -->
        </div>
    </div>
</aside>

<div class="page-offset"></div>

<div style="width: 100%; min-height: 100vh; position: relative; background: #FAFAFA; overflow: visible; display: flex; flex-direction: column;">
    <div class="container">
        <div class="contact-header">
            <div class="contact-title">Contact Us</div>
            <div class="contact-subtitle">Informasi dan narahubung desa wisata</div>
        </div>

        <div class="contact-grid" style="margin-top: 24px;">
            <div class="contact-card">
                <div class="contact-icon">
                    <img src="<?php echo e(asset('images/Frame.png')); ?>" alt="Office icon">
                </div>
                <div class="contact-card-title">Office</div>
                <div class="contact-card-text">Desa Tlemang Kecamatan Ngimbang</div>
            </div>
            <div class="contact-card">
                <div class="contact-icon">
                    <img src="<?php echo e(asset('images/Frame(1).png')); ?>" alt="Email icon">
                </div>
                <div class="contact-card-title">Email</div>
                <div class="contact-card-text">desa.tlemang@gmail.com</div>
            </div>
            <div class="contact-card">
                <div class="contact-icon">
                    <img src="<?php echo e(asset('images/Frame(2).png')); ?>" alt="Phone icon">
                </div>
                <div class="contact-card-title">Phone</div>
                <div class="contact-card-text">081216612979</div>
            </div>
        </div>

        <div class="home-btn-wrap">
            <a class="home-btn" href="/">Go To Home</a>
        </div>
    </div>

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
</div>
<script>
    // Toggle sidebar via hamburger
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


