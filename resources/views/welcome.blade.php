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

        body {
            font-family: 'Raleway', 'Poppins', 'Roboto', sans-serif;
            line-height: 1.6;
            color: #333333;
            overflow-x: hidden;
        }

        /* Main Container */
        .main-container {
            width: 100%;
            min-height: 100vh;
            position: relative;
            background: #2BA5B5;
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
            font-size: 60.90px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 79.20px;
            word-wrap: break-word;
        }

        .hero-title-tlemang {
            color: #FDC937;
            font-size: 60.90px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 79.20px;
            word-wrap: break-word;
        }

        .hero-title-kecamatan {
            color: #292929;
            font-size: 60.90px;
            font-family: Poppins;
            font-weight: 800;
            line-height: 79.20px;
            word-wrap: break-word;
        }

        .hero-description {
            color: #1C1C1C;
            font-size: 23.50px;
            font-family: Poppins;
            font-weight: 400;
            line-height: 37.66px;
            max-width: 800px;
            margin-bottom: 30px;
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
        }

        .gallery-button:hover {
            background: #258D9B;
            transform: translateY(-2px);
        }

        .gallery-button-text {
            text-align: center;
            color: white;
            font-size: 18px;
            font-family: Roboto;
            font-weight: 700;
            line-height: 28px;
            word-wrap: break-word;
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
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            position: relative;
            z-index: 10;
        }

        .news-item {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .news-item:hover {
            transform: translateY(-5px);
        }

        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 20px;
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .news-category {
            color: #333333;
            font-size: 12px;
            font-family: Roboto;
            font-weight: 700;
            background: #f0f0f0;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .news-date {
            color: #999999;
            font-size: 12px;
            font-family: Roboto;
            font-weight: 500;
        }

        .news-title {
            color: #333333;
            font-size: 18px;
            font-family: Raleway;
            font-weight: 700;
            line-height: 24px;
            margin-bottom: 10px;
        }

        .news-description {
            color: #666666;
            font-size: 14px;
            font-family: Roboto;
            font-weight: 400;
            line-height: 20px;
            margin-bottom: 15px;
        }

        .news-read-more {
            color: #1A646D;
            font-size: 14px;
            font-family: Roboto;
            font-weight: 700;
            text-decoration: underline;
            cursor: pointer;
        }

        .news-read-more:hover {
            color: #258D9B;
        }

        /* Footer */
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
            .hero-title-desa,
            .hero-title-tlemang,
            .hero-title-kecamatan {
                font-size: 40px;
                line-height: 50px;
            }
            
            .hero-description {
                font-size: 18px;
                line-height: 28px;
            }
            
            .gallery-section {
                grid-template-columns: 1fr;
            }
            
            .news-section {
                grid-template-columns: 1fr;
            }
            
            .logo {
                left: 20px;
                font-size: 24px;
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

            /* Responsive for content-section--side */
            .content-section--side {
                grid-template-columns: 1fr;
            }
            .content-paragraph-justified {
                color: #333333;
            }
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
                <img src="{{ asset('images/logo.png') }}" alt="EtnhoGring Logo" class="logo-image">
                EtnhoGring
            </div>
            
        </div>
        
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
                            <span class="hero-title-desa">Desa </span>
                            <span class="hero-title-tlemang">Tlemang<br/></span>
                            <span class="hero-title-kecamatan">Kecamatan Ngimbang </span>
                        </div>
                    </div>
                    
                    <div class="hero-description">
                        Desa Tlemang, Kecamatan Ngimbang, Kabupaten Lamongan dikenal sebagai desa yang kaya akan budaya dan warisan leluhur. Salah satu potensi unggulannya adalah mendhak sanggring, yang telah diakui sebagai ikon desa wisata oleh UNICEF. Tradisi budaya memasak sayur pakis yang dilakukan oleh para lelaki desa yang masih lestari menjadi daya tarik edukatif dan budaya bagi wisatawan lokal maupun mancanegara.
                    </div>
                    
                    <div class="hero-button">
                        <div class="hero-button-text">Ketahui Lebih Lanjut</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="gallery-section">
            <div class="gallery-item">
                <img class="gallery-image" src="{{ asset('images/galeri_budaya.png') }}" alt="Galeri Budaya">
                <div class="gallery-header">
                    <div class="gallery-title">Galeri Budaya</div>
                    <div class="gallery-button">
                        <div class="gallery-button-text">Lanjutkan</div>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <img class="gallery-image" src="{{ asset('images/dokumentasi_tradisi.png') }}" alt="Dokumentasi Tradisi">
                <div class="gallery-header">
                    <div class="gallery-title">Dokumentasi Tradisi</div>
                    <div class="gallery-button">
                        <div class="gallery-button-text">Lanjutkan</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Section -->
        <div class="content-section">
            <div class="content-image-box">
                <img class="content-image" src="{{ asset('images/tentang_desa.jpg') }}" alt="Desa Tlemang">
                <div class="content-overlay">
                    <div class="content-title">
                        <span class="content-title-italic">Galeri Budaya<br/></span>
                        <span class="content-title-normal">Desa Tlemang Kecamatan Ngimbang</span>
                    </div>
                    <div class="content-description">
                        E-Layanan adalah sistem pelayanan berbasis digital yang memungkinkan masyarakat mengakses berbagai layanan administrasi desa secara mudah, cepat, dan transparan
                    </div>
                    <div class="content-date">20 Juni 2025</div>
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
                <button class="content-outline-button" type="button">
                    <span class="content-outline-button-text">Selengkapnya</span>
                </button>
            </div>
        </div>

        <!-- News Section -->
        <div class="news-section">
            <div class="news-item">
                <img class="news-image" src="https://placehold.co/405x322" alt="Alokasi Perencanaan Anggaran Dana Desa 2024">
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-category">Dana Desa</div>
                        <div class="news-date">13 Januari 2025</div>
                    </div>
                    <div class="news-title">Alokasi Perencanaan Anggaran Dana Desa 2024</div>
                    <div class="news-description">Pemabnguan desa menjadi program prioritas pemerintah dalam mendukung pembangunan nasional, melalui rencana strategis pemerintah.</div>
                    <div class="news-read-more">Read More...</div>
                </div>
            </div>
            
            <div class="news-item">
                <img class="news-image" src="https://placehold.co/405x322" alt="Upaya Pengembangan Wisata Religi">
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-category">DEVELOPMENT</div>
                        <div class="news-date">18 Juni 2024</div>
                    </div>
                    <div class="news-title">Upaya Pengembangan Wisata Religi</div>
                    <div class="news-description">Medhak sanggring adalah destinasi wisata religi yang berada di Desa Tlemang Kecamatan Ngimbang Kabupaten Lamongan.</div>
                    <div class="news-read-more">Read More...</div>
                </div>
            </div>
            
            <div class="news-item">
                <img class="news-image" src="https://placehold.co/405x322" alt="Sinergitas dan Kolaborasi">
                <div class="news-content">
                    <div class="news-meta">
                        <div class="news-category">Kolaborasi</div>
                        <div class="news-date">3 Juli 2025</div>
                    </div>
                    <div class="news-title">Sinergitas dan Kolaborasi Bersama pemerintah desa bersama UNESA</div>
                    <div class="news-description">Dalam upaya memperkuat tata kelola pemerintahan desa yang modern, inovatif, dan berbasis digital pendampingan telah sukses diselenggarakan di Balai Desa Tlemang.</div>
                    <div class="news-read-more">Read More...</div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="EtnhoGring Logo" class="logo-image">
                    EtnhoGring
                </div>
                
                <div class="footer-social">
                    <div class="social-icon">FB</div>
                    <div class="social-icon">IG</div>
                    <div class="social-icon">LN</div>
                    <div class="social-icon">YT</div>
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
        
        // Add click handlers for buttons
        document.querySelectorAll('.hero-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Fitur "Ketahui Lebih Lanjut" akan segera tersedia!');
            });
        });
        
        document.querySelectorAll('.gallery-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Fitur galeri akan segera tersedia!');
            });
        });
        
        document.querySelectorAll('.content-button').forEach(button => {
            button.addEventListener('click', function() {
                alert('Fitur selengkapnya akan segera tersedia!');
            });
        });
        
        document.querySelectorAll('.news-read-more').forEach(link => {
            link.addEventListener('click', function() {
                alert('Artikel lengkap akan segera tersedia!');
            });
        });
        
        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                alert('Media sosial akan segera tersedia!');
            });
        });
    </script>
    </body>
</html>
