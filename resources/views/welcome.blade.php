<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EtnhoGring - Desa Tlemang Kecamatan Ngimbang</title>

        <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700;800&family=Poppins:wght@400;700;800&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
            <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body { height: 100%; }
        body {
            font-family: 'Raleway', 'Poppins', 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333333;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Main Container */
        .main-container {
            width: 100%;
            position: relative;
            background: #2BA5B5;
            flex: 1 0 auto;
            padding-bottom: 0;
        }

        /* Background Elements */
        .bg-circle-1 {
            width: 800px;
            height: 800px;
            left: -200px;
            top: -200px;
            position: fixed;
            transform: rotate(10deg);
            transform-origin: top left;
            background: #258D9B;
            border-radius: 50%;
            opacity: 0.3;
            z-index: 1;
        }

        .bg-circle-2 {
            width: 600px;
            height: 600px;
            right: -150px;
            bottom: -150px;
            position: fixed;
            transform: rotate(-10deg);
            transform-origin: bottom right;
            background: linear-gradient(131deg, #2BA5B5 13%, #195F68 69%, #0D3035 100%);
            border-radius: 50%;
            opacity: 0.3;
            z-index: 1;
        }

        /* Header */
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


        /* Hero Section */
        .hero-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 150px 20px 50px;
            position: relative;
            z-index: 10;
            margin-top: 98px;
        }

        

        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 30px;
        }

        .hero-icon {
            width: 38px;
            height: 37.59px;
            position: relative;
            overflow: hidden;
        }

        .hero-icon-inner {
            width: 38px;
            height: 37.59px;
            left: 0px;
            top: 0px;
            position: absolute;
            background: url('{{ asset('images/star.svg.svg') }}') no-repeat center center / contain;
        }

        .hero-title {
            color: black;
            font-size: 24px;
            font-family: Poppins;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-title-text {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
        }

        .hero-title-desa {
            color: #292929;
            font-size: 36px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 46px;
            word-wrap: break-word;
        }

        .hero-title-tlemang {
            color: #FDC937;
            font-size: 36px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 46px;
            word-wrap: break-word;
        }

        .hero-title-kecamatan {
            color: #292929;
            font-size: 36px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 46px;
            word-wrap: break-word;
        }

        .hero-description {
            color: #1C1C1C;
            font-size: 20px;
            font-family: Poppins;
            font-weight: 600;
            line-height: 32px;
            max-width: 1000px;
            margin-bottom: 24px;
            text-align: justify;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero-button {
            padding: 24px 40px;
            background: #2BA5B5;
            border-radius: 9999px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: inherit;
        }

        .hero-button:hover {
            background: #258D9B;
            transform: translateY(-2px);
        }

        .hero-button-text {
            color: #FCFCFC;
            font-size: 17.60px;
            font-family: Poppins;
            font-weight: 700;
            line-height: 17.61px;
            word-wrap: break-word;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Gallery Section */
        .gallery-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex;
            gap: 30px;
            position: relative;
            z-index: 10;
        }

        .gallery-item {
            background: transparent;
            border-radius: 0;
            padding: 0;
            text-align: left;
            box-shadow: none;
            min-width: 300px;
            flex: 0 0 300px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
        }

        .gallery-title {
            color: #333333;
            font-size: 24px;
            font-family: Raleway;
            font-weight: 700;
            line-height: 31.99px;
            word-wrap: break-word;
        }

        .gallery-header {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .gallery-button {
            padding: 12px 36px;
            background: #2BA5B5;
            box-shadow: 4px 10px 10px rgba(0, 0, 0, 0.25);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            color: white;
            height: 40px;
            text-decoration: none;
        }

        .gallery-button:hover {
            background: #258D9B;
            transform: translateY(-2px);
            text-decoration: none;
        }

        .gallery-button-text {
            text-align: center;
            color: white;
            font-size: 18px;
            font-family: Roboto;
            font-weight: 700;
            line-height: 28px;
            word-wrap: break-word;
            text-decoration: none;
        }

        /* Content Section */
        .content-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            position: relative;
            z-index: 10;
            display: grid;
            grid-template-columns: 756px;
            justify-content: start;
        }

        .content-image-box {
            width: 100%;
            height: 425px;
            border-radius: 16px;
            overflow: visible;
            position: relative;
        }

        .content-image {
            width: 100%;
            height: 120%;
            object-fit: cover;
            border-radius: 16px;
            display: block;
        }

        .content-overlay {
            background: rgba(255, 255, 255, 0.80);
            border-radius: 16px;
            padding: 30px;
            position: absolute;
            z-index: 20;
            top: 29px;
            right: -400px;
            width: 617px;
            max-width: 617px;
        }
        .content-overlay-btn {
            position: absolute;
            right: 0;
            bottom: 0;
            transform: translate(16px, 70px);
        }
        .overlay-button {
            display: inline-flex;
            padding: 12px 24px;
            border-radius: 8px;
            outline: 1px #1A646D solid;
            outline-offset: -1px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background: #1A646D;
            cursor: pointer;
            text-decoration: none;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }
        .overlay-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            background: #1f6f78;
        }
        .overlay-button:active {
            transform: translateY(0);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
        }
        .overlay-button:focus { outline: none; }
        .overlay-button-text {
            text-align: center;
            color: white;
            font-size: 14px;
            font-family: Roboto;
            font-weight: 700;
            line-height: 21px;
            word-wrap: break-word;
        }

        .content-title {
            margin-bottom: 20px;
        }

        .content-title-italic {
            color: #333333;
            font-size: 32px;
            font-family: Raleway;
            font-style: italic;
            font-weight: 700;
            line-height: 45px;
        }

        .content-title-normal {
            color: #333333;
            font-size: 32px;
            font-family: Raleway;
            font-weight: 700;
            line-height: 45px;
        }

        .content-description {
            color: #666666;
            font-size: 22px;
            font-family: Roboto;
            font-weight: 600;
            line-height: 33px;
            margin-bottom: 20px;
        }

        .content-button {
            padding: 16px 32px;
            border: 1px solid #1A646D;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: transparent;
            color: #1A646D;
            font-size: 16px;
            font-weight: 700;
        }

        .content-button:hover {
            background: #1A646D;
            color: white;
        }

        .content-date {
            color: #999999;
            font-size: 20px;
            font-family: Roboto;
            font-weight: 500;
            line-height: 30px;
            margin-top: 15px;
        }

        .content-category {
            color: #333333;
            font-size: 20px;
            font-family: Roboto;
            font-weight: 700;
            margin-top: 10px;
        }

        /* News Section */
        .news-section {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            display: flex; /* single horizontal line */
            gap: 24px;
            position: relative;
            z-index: 10;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-snap-type: x proximity;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none; /* hide scrollbar in Firefox */
            padding-bottom: 100px; /* more room so Read More not clipped */
            margin-top: 0; /* remove spacer above */
            margin-bottom: 100px; /* extra spacing before footer */
        }

        /* Hide scrollbar in WebKit browsers */
        .news-section::-webkit-scrollbar { height: 0; }
        .news-section::-webkit-scrollbar-track { background: transparent; }
        .news-section::-webkit-scrollbar-thumb { background: transparent; border-radius: 0; }
        /* Align anchor scroll with fixed header and footer; tuned to Figma spacing */
        .scroll-target { scroll-margin-top: 110px; scroll-margin-bottom: 180px; }

        .news-item {
            background: transparent;
            border-radius: 0;
            overflow: visible;
            box-shadow: none;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 480px; /* taller so description + Read More always visible */
            flex: 0 0 360px; /* fixed card width for one-line scroll */
            scroll-snap-align: start;
        }

        .news-item:hover {
            transform: translateY(-5px);
        }

        .news-image {
            width: 100%;
            height: 322px;
            object-fit: cover;
            flex-shrink: 0;
            border-radius: 0;
        }

        .news-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            flex: 1;
        }

        .news-meta {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 12px;
            margin-bottom: 8px;
            font-family: Roboto;
        }

        .news-category {
            color: #333333;
            font-size: 12px;
            font-family: Roboto;
            font-weight: 700;
            text-transform: uppercase;
        }

        .news-date {
            color: #999999;
            font-size: 12px;
            font-family: Roboto;
            font-weight: 500;
        }

        .news-title {
            color: #333333;
            font-size: 24px;
            font-family: Raleway;
            font-weight: 700;
            line-height: 31.99px;
            margin-bottom: 0;
            min-height: 48px; /* up to 2 lines */
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-description {
            color: #666666;
            font-size: 16px;
            font-family: Roboto;
            font-weight: 400;
            line-height: 24px;
            margin-bottom: 0;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 72px;
        }

        .news-read-more {
            color: #1A646D;
            font-size: 18px;
            font-family: Roboto;
            font-weight: 700;
            text-decoration: underline;
            line-height: 27px;
            word-wrap: break-word;
            cursor: pointer;
            margin-top: auto; /* push to bottom */
        }

        .news-read-more:hover {
            color: #258D9B;
        }

        /* Footer */
        .footer {
            width: 100%;
            background: white;
            padding: 80px 20px; /* make footer a bit taller */
            position: relative;
            z-index: 10;
            margin-top: auto;
            border-top: 1px solid rgba(0,0,0,0.08);
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
            font-size: 16px;
            font-family: Raleway;
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

        /* Content Section 2 (side text, no card) */
        .content-section--side {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px;
            position: relative;
            z-index: 10;
            display: grid;
            grid-template-columns: 756px 420px;
            gap: 16px;
            align-items: start;
            justify-content: center;
        }
        .content-text-area {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .content-badge {
            color: #333333;
            font-size: 12px;
            font-family: Roboto;
            font-weight: 700;
            line-height: 18px;
            word-wrap: break-word;
        }
        .content-heading {
            display: block;
        }
        .content-heading-italic {
            color: #333333;
            font-size: 30px;
            font-family: Raleway;
            font-style: italic;
            font-weight: 400;
            line-height: 35px;
        }
        .content-heading-strong {
            color: #333333;
            font-size: 30px;
            font-family: Raleway;
            font-weight: 700;
            line-height: 35px;
        }
        .content-paragraph-justified {
            text-align: justify;
            color: white;
            font-size: 20px;
            font-family: Roboto;
            font-weight: 500;
            line-height: 30px;
            word-wrap: break-word;
            margin-top: 8px;
        }
        .content-outline-button {
            display: inline-flex;
            padding: 16px 48px;
            border-radius: 8px;
            outline: 1px #1A646D solid;
            outline-offset: -1px;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background: transparent;
            cursor: pointer;
            margin-top: 12px;
            text-decoration: none;
        }
        .content-outline-button-text {
            text-align: center;
            color: #1A646D;
            font-size: 14px;
            font-family: Roboto;
            font-weight: 700;
            line-height: 21px;
            word-wrap: break-word;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            /* Header & nav (kembalikan seperti sebelumnya) */
            .header { height: 64px; }
            .hero-title-desa,
            .hero-title-tlemang,
            .hero-title-kecamatan {
                font-size: 28px;
                line-height: 36px;
            }
            
            .hero-description {
                font-size: 16px;
                line-height: 24px;
            }
            
            .hero-section { padding: 96px 16px 32px; margin-top: 64px; }
            .logo {
                left: 64px;
                top: 14px;
                font-size: 22px;
            }
            .logo-image { width: 40px; height: 40px; }
            .hamburger { left: 16px; width: 28px; height: 3px; top: 22px; }
            .header .hamburger:nth-child(2) { top: 30px; }
            .header .hamburger:nth-child(3) { top: 38px; }

            /* Sidebar (samakan pola navigasi halaman lain, tapi untuk header 64px) */
            .sidebar { width: 25vw; max-width: 420px; min-width: 280px; top: 64px; height: calc(100vh - 64px); padding-top: 12px; }

            /* Gallery stacks */
            .gallery-section {
                flex-direction: column;
                padding: 32px 16px;
            }
            .gallery-item { min-width: 0; flex: 1 1 auto; }
            .gallery-image { height: 180px; }
            .gallery-title { font-size: 20px; }
            
            .logo {
                font-size: 22px;
            }
            
            .contact-btn {
                right: 20px;
            }

            /* Stack content and keep overlay fully inside on small screens */
            .content-section {
                grid-template-columns: 1fr;
            }
            .content-image-box {
                overflow: hidden;
            }
            .content-overlay {
                position: relative;
                top: -40px;
                right: auto;
                width: auto;
                max-width: none;
                margin: 0 16px;
            }
            .content-overlay-btn {
                position: static;
                margin-top: 12px;
                transform: none;
                display: flex;
                justify-content: flex-end;
            }

            /* Responsive for content-section--side */
            .content-section--side {
                grid-template-columns: 1fr;
            }
            .content-paragraph-justified {
                color: #333333;
            }

            /* News cards tune for viewport */
            .news-section { padding: 32px 16px 80px; gap: 16px; }
            .news-item { flex: 0 0 82%; height: auto; }
            .news-image { height: 220px; }
            .news-title { font-size: 20px; line-height: 28px; min-height: 0; }
            .news-description { font-size: 14px; line-height: 20px; -webkit-line-clamp: 4; min-height: 0; }
            .news-read-more { font-size: 16px; }

            /* Footer spacing */
            .footer { padding: 48px 16px; }
            .footer-logo { font-size: 24px; }
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content {
            animation: fadeInUp 1s ease-out;
        }

        .gallery-item {
            animation: fadeInUp 1s ease-out;
            animation-delay: 0.2s;
        }

        .news-item {
            animation: fadeInUp 1s ease-out;
            animation-delay: 0.4s;
        }

        /* Sidebar (card 1/4 page width) */
        .sidebar {
            position: fixed;
            top: 98px; /* below header */
            left: 0;
            width: 25vw; /* 1/4 of page width */
            max-width: 420px;
            min-width: 280px;
            height: calc(100vh - 98px);
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(2px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: 900; /* under header (1000), above content (10) */
            padding: 20px;
        }
        .sidebar.open { transform: translateX(0); }
        .sidebar-inner { display: flex; flex-direction: column; gap: 16px; }
        .sidebar-title { color: #333333; font-size: 20px; font-family: Raleway; font-weight: 700; }
        .sidebar-list { display: flex; flex-direction: column; gap: 12px; margin-top: 8px; }
        .sidebar-item { display: flex; align-items: center; gap: 12px; padding: 8px 6px; border-radius: 10px; transition: background 0.2s ease; cursor: pointer; }
        .sidebar-item:hover { background: rgba(0,0,0,0.04); }
        .sidebar-item img { width: 42px; height: 42px; object-fit: contain; }
        .sidebar-item span { color: #333333; font-size: 16px; font-family: Raleway; font-weight: 600; line-height: 22px; }
        
        /* Ensure mobile sidebar sticks under 64px header (override placed after base) */
        @media (max-width: 768px) {
            .sidebar { top: 64px; height: calc(100vh - 64px); }
        }

            </style>
    </head>
<body>
    <div class="main-container">
        <!-- Background Elements -->
        <div class="bg-circle-1"></div>
        <div class="bg-circle-2"></div>
        
        <!-- Header -->
        <div class="header">
            <!-- Hamburger Menu -->
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            <div class="hamburger"></div>
            
            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="EtnhoGring Logo" class="logo-image">
                EtnhoGring
            </div>
        </div>

        <!-- Sidebar (slides from left) -->
        <aside id="sidebar" class="sidebar" aria-hidden="true">
            <div class="sidebar-inner">
                <div class="sidebar-list">
                    <div class="sidebar-item" onclick="window.location.href='{{ route('galeri.budaya') }}'">
                        <img src="{{ asset('images/galerilogo_budaya.png') }}" alt="Galeri Budaya">
                        <span>Galeri Budaya</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('dokumentasi.tradisi') }}'">
                        <img src="{{ asset('images/dokum_tradisi.png') }}" alt="Dokumentasi Tradisi">
                        <span>Dokumentasi Tradisi</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('contact') }}'">
                        <img src="{{ asset('images/logo.svg') }}" alt="Contact">
                        <span>Contact Us</span>
                    </div>
                    <div class="sidebar-item" onclick="window.location.href='{{ route('admin.login') }}'">
                        <img src="{{ asset('images/logo.svg') }}" alt="Admin Login">
                        <span>Admin Login</span>
                    </div>
                </div>
            </div>
        </aside>
        
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-icon">
                    <div class="hero-icon-inner"></div>
                </div>
                
                <div class="hero-text-content">
                    <div class="hero-title">Layanan Digital Desa Tlemang Ngimbang</div>
                    
                    <div class="hero-main-title">
                        <div class="hero-title-text">
                            <span class="hero-title-desa">Desa </span><span class="hero-title-tlemang">Tlemang</span><br/>
                            <span class="hero-title-kecamatan">Kecamatan Ngimbang </span>
                        </div>
                    </div>
                    
                    <div class="hero-description">
                        Desa Tlemang, Kecamatan Ngimbang, Kabupaten Lamongan dikenal sebagai desa yang kaya akan budaya dan warisan leluhur. Salah satu potensi unggulannya adalah mendhak sanggring, tradisi ini telah ditetapkan sebagai Warisan Budaya Tak Benda (WBTB) Nasional pada tahun 2013, yang menegaskan posisinya sebagai bagian dari warisan budaya Indonesia. Tradisi budaya memasak sayur pakis yang dilakukan oleh para lelaki desa yang masih lestari menjadi daya tarik edukatif dan budaya bagi wisatawan lokal maupun mancanegara.
                    </div>
                    
                    <a class="hero-button" href="{{ route('galeri.budaya') }}">
                        <div class="hero-button-text">Ketahui Lebih Lanjut</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-section">
            <div class="gallery-item">
                <img class="gallery-image" src="{{ asset('images/galeri_budaya.png') }}" alt="Galeri Budaya">
                <div class="gallery-header">
                    <div class="gallery-title">Galeri Budaya</div>
                    <a class="gallery-button" href="{{ route('galeri.budaya') }}">
                        <div class="gallery-button-text">Lanjutkan</div>
                    </a>
                </div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="{{ asset('images/dokumentasi_tradisi.png') }}" alt="Dokumentasi Tradisi">
                <div class="gallery-header">
                    <div class="gallery-title">Dokumentasi Tradisi</div>
                    <a class="gallery-button" href="{{ route('dokumentasi.tradisi') }}">
                        <div class="gallery-button-text">Lanjutkan</div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <div class="content-image-box">
                <img class="content-image" src="{{ asset('images/tentangdesa.jpg') }}" alt="Desa Tlemang">
                <div class="content-overlay">
                    <div class="content-title">
                        <span class="content-title-italic">Galeri Budaya<br/></span>
                        <span class="content-title-normal">Desa Tlemang Kecamatan Ngimbang</span>
                    </div>
                    <div class="content-description">
                        Galeri Budaya merupakan penguatan branding desa wisata untuk memberikan edukasi kepada pengunjung. Tradisi Mendhak Nyanggring telah ditetapkan sebagai Warisan Budaya Tak Benda Nasional pada tahun 2013.
                    </div>
                    <div class="content-date">20 Juni 2025</div>
                    <div class="content-overlay-btn">
                        <a class="overlay-button" href="{{ route('galeri.budaya') }}">
                            <span class="overlay-button-text">Selengkapnya</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section 2 (image left, text right; no card) -->
        <div class="content-section--side">
            <div class="content-image-box">
                <img class="content-image" src="{{ asset('images/dokumen_2.png') }}" alt="Dokumen 2">
            </div>
            <div class="content-text-area">
                <div class="content-badge">Potensi Desa</div>
                <div class="content-heading">
                    <span class="content-heading-italic">Dokumentasi Tradisi -</span>
                    <span class="content-heading-strong"> Desa Tlemang, Menggelar acar adat “Mendhak Sanggring”</span>
                </div>
                <div class="content-paragraph-justified">
                    Desa Tlemang, yang terletak di Kabupaten Lamongan, Jawa Timur, dikenal tidak hanya karena keindahan alamnya, tetapi juga karena kekayaan tradisi yang diwariskan secara turun-temurun. Salah satu tradisi yang masih lestari hingga kini adalah Mendhak Sanggring, sebuah acara adat yang menjadi simbol kebersamaan, religiusitas, dan penghormatan terhadap warisan leluhur. <br/>
                    Acara ini digelar sebagai bentuk rasa syukur masyarakat atas karunia yang diberikan Tuhan Yang Maha Esa sekaligus menjadi media mempererat hubungan sosial. “Mendhak” sendiri memiliki makna mengundang atau mengumpulkan, sedangkan “Sanggring” merujuk pada salah satu jenis hidangan khas yang disajikan dalam tradisi ini. Kombinasi keduanya melahirkan ritual yang unik, di mana masyarakat saling berbagi makanan, doa, dan kebersamaan dalam suasana penuh makna.
                </div>
                <a class="content-outline-button" href="{{ route('dokumentasi.tradisi') }}">
                    <span class="content-outline-button-text">Selengkapnya</span>
                </a>
            </div>
        </div>

        <!-- News Section -->
        <div class="news-section">
            <?php $galeriItems = \App\Models\GaleriBudaya::orderByDesc('created_at')->get(); ?>
            <?php foreach ($galeriItems as $item): ?>
            <?php
                $basename = $item->foto ? basename($item->foto) : null;
                $galleryBase = rtrim(env('UPLOAD_BASE_PATH', public_path('images')), '/');
                $galleryPath = $basename ? $galleryBase.'/gallery/'.$basename : null;
                $img = ($galleryPath && file_exists($galleryPath))
                    ? asset('images/gallery/'.$basename)
                    : 'https://placehold.co/405x322';
            ?>
            <div class="news-item" onclick="window.location.href='<?php echo e(route('galeri.budaya')); ?>?highlight=<?php echo e($item->id); ?>#item-<?php echo e($item->id); ?>'" style="cursor:pointer;" role="link" tabindex="0">
                <img class="news-image" src="<?php echo e($img); ?>" alt="<?php echo e($item->title); ?>" style="pointer-events:none;">
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-category"><?php echo e(ucfirst($item->jenis)); ?></div>
                        <div class="news-date"><?php echo e($item->tanggal_kegiatan ? \Carbon\Carbon::parse($item->tanggal_kegiatan)->format('d F Y') : optional($item->created_at)->format('d F Y')); ?></div>
                    </div>
                    <div class="news-title"><?php echo e($item->title); ?></div>
                    <div class="news-description"><?php echo e(Str::limit($item->isi_kegiatan, 120)); ?></div>
                    <a href="<?php echo e(route('galeri.budaya')); ?>?highlight=<?php echo e($item->id); ?>#item-<?php echo e($item->id); ?>" class="news-read-more">Read More...</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.svg') }}" alt="EtnhoGring Logo" class="logo-image">
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
    
    <!-- JavaScript for interactions -->
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Add hover effects to buttons
        document.querySelectorAll('.hero-button, .gallery-button, .content-button, .social-icon').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // hero-button navigates via anchor link; no JS needed
        
        // gallery-button now uses anchor links; no JS needed
        
        document.querySelectorAll('.content-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Fitur selengkapnya akan segera tersedia!');
            });
        });
        
        
        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                alert('Media sosial akan segera tersedia!');
            });
        });

        // Toggle sidebar via hamburger (garis 3)
        (function() {
            const hamburgers = document.querySelectorAll('.header .hamburger');
            const sidebar = document.getElementById('sidebar');

            function toggleSidebar(ev) {
                if (ev) { ev.preventDefault(); ev.stopPropagation(); }
                const opened = sidebar.classList.toggle('open');
                sidebar.setAttribute('aria-hidden', opened ? 'false' : 'true');
            }

            function addTapListeners(element, handler) {
                // Touch first for mobile responsiveness
                element.addEventListener('touchstart', handler, { passive: false });
                element.addEventListener('click', handler);
            }

            hamburgers.forEach(h => {
                addTapListeners(h, toggleSidebar);
                h.setAttribute('role', 'button');
                h.setAttribute('tabindex', '0');
                h.style.cursor = 'pointer';
                h.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        toggleSidebar(e);
                    }
                });
            });

            // Close when clicking/tapping outside sidebar
            function handleOutside(ev) {
                const target = ev.target;
                const isHamburger = target.classList && target.classList.contains('hamburger');
                const clickedInsideSidebar = sidebar.contains(target);
                if (!isHamburger && !clickedInsideSidebar && sidebar.classList.contains('open')) {
                    ev.preventDefault();
                    sidebar.classList.remove('open');
                    sidebar.setAttribute('aria-hidden', 'true');
                }
            }
            document.addEventListener('touchstart', handleOutside, { passive: false });
            document.addEventListener('click', handleOutside);
        })();
        
    </script>
    </body>
</html>
