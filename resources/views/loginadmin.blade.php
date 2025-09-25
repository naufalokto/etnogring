<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - EtnhoGring</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&family=Raleway:wght@800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #59C4D2 0%, #2BA5B5 100%);
            min-height: 100vh;
            overflow-x: hidden;
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

        /* Sidebar */
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

        /* Background decorative elements */
        .bg-element-1 {
            width: 120px;
            height: 216px;
            background: #59C4D2;
            position: absolute;
            left: 84px;
            top: 108px;
            box-shadow: 2px 10px 5px rgba(0, 0, 0, 0.20);
        }

        .bg-element-2 {
            width: 120px;
            height: 216px;
            background: #2BA5B5;
            position: absolute;
            left: 0px;
            top: 0px;
            box-shadow: 2px 10px 5px rgba(0, 0, 0, 0.20);
        }

        .bg-element-3 {
            width: 356.23px;
            height: 384.95px;
            background: #2BA5B5;
            position: absolute;
            left: 552.18px;
            top: 277.52px;
            transform: rotate(-270deg);
            transform-origin: top left;
            box-shadow: 2px 10px 5px rgba(0, 0, 0, 0.20);
        }

        .bg-element-4 {
            width: 394px;
            height: 507.26px;
            background: #1A646D;
            position: absolute;
            left: 144px;
            top: 645.90px;
            transform: rotate(-89deg);
            transform-origin: top left;
            box-shadow: 2px 10px 5px rgba(0, 0, 0, 0.20);
        }

        .bg-element-5 {
            width: 394px;
            height: 507.26px;
            background: #1A646D;
            position: absolute;
            left: 659.94px;
            top: 527.07px;
            transform: rotate(91deg);
            transform-origin: top left;
            box-shadow: 2px 10px 5px rgba(0, 0, 0, 0.20);
        }

        /* Hide decorative elements to clean up background */
        .bg-element-1, .bg-element-2, .bg-element-3, .bg-element-4, .bg-element-5 { display: none; }

        /* Spacer element to push content down */
        .header-spacer {
            height: 200px;
            width: 100%;
            background: transparent;
        }

        /* Main container */
        .main-container {
            width: 100%;
            min-height: 100vh;
            position: relative;
            background: transparent;
            padding-top: 0;
            padding-bottom: 40px;
            display: flex;
            flex-direction: column;
        }

        /* Login form container */
        .login-container {
            width: 100%;
            max-width: 500px;
            background: transparent;
            box-shadow: 7px 8px 54px rgba(124, 78, 228, 0.07);
            border-radius: 16px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            min-height: calc(100vh - 300px);
        }

        /* Logo container with ellipse */
        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
            position: relative;
        }

        /* Ellipse 1 - positioned at top-left of logo */
        .ellipse-1 {
            width: 40px;
            height: 40px;
            object-fit: contain;
            position: absolute;
            top: -60px;
            left: -20px;
            z-index: 3;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        /* Ellipse 2 - positioned below and to the right of Ellipse 1 */
        .ellipse-2 {
            width: 40px;
            height: 40px;
            object-fit: contain;
            position: absolute;
            top: -35px;
            left: 0px;
            z-index: 3;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        /* Large logo */
        .welcome-logo {
            width: 120px;
            height: 120px;
            object-fit: contain;
            z-index: 2;
            position: relative;
        }

        /* Welcome text */
        .welcome-title {
            color: white;
            font-size: 32px;
            font-family: Inter;
            font-weight: 900;
            text-align: center;
            margin-bottom: 10px;
        }

        .welcome-subtitle {
            color: white;
            font-size: 24px;
            font-family: Inter;
            font-weight: 400;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Form container */
        .form-container {
            width: 100%;
            background: white;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 30px;
            margin-top: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Form inputs */
        .form-group {
            margin-bottom: 20px;
            flex: 1;
        }

        .form-label {
            color: black;
            font-size: 18px;
            font-family: Inter;
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            height: 60px;
            background: #E8E8E9;
            border: 0.60px solid #D1D1D3;
            border-radius: 5px;
            font-size: 16px;
            font-family: Inter;
            padding: 0 15px;
            color: black;
        }

        .form-input:focus {
            outline: none;
            border-color: #2BA5B5;
        }

        .form-input::placeholder {
            color: #999;
            font-size: 16px;
        }

        /* Forgot password link */
        .forgot-password {
            color: black;
            font-size: 16px;
            font-family: Inter;
            font-weight: 700;
            text-decoration: none;
            text-align: right;
            display: block;
            margin: 10px 0;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }


        /* Login button */
        .login-button {
            width: 100%;
            height: 60px;
            background: #2BA5B5;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            font-family: Inter;
            font-weight: 700;
            cursor: pointer;
            margin: 20px 0;
            display: block;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background: #258D9B;
        }

        /* Register link */
        .register-link {
            text-align: center;
            margin-top: 20px;
        }

        .register-link span {
            color: black;
            font-size: 16px;
            font-family: Inter;
            font-weight: 400;
        }

        .register-link .register-text {
            font-weight: 700;
            cursor: pointer;
        }

        .register-link .register-text:hover {
            text-decoration: underline;
        }


        /* Error/Success messages */
        .error-message {
            background: #fee;
            color: #c33;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            font-family: Inter;
            margin-bottom: 15px;
            border: 1px solid #fcc;
        }

        .success-message {
            background: #efe;
            color: #363;
            padding: 12px;
            border-radius: 8px;
            font-size: 14px;
            font-family: Inter;
            margin-bottom: 15px;
            border: 1px solid #cfc;
        }

        /* Desktop optimized layout */
        @media (min-width: 1024px) {
            .main-container {
                padding: 20px;
            }
            
            .login-container {
                max-width: 600px;
                margin: 20px auto;
            }
            
            .welcome-title {
                font-size: 28px;
            }
            
            .welcome-subtitle {
                font-size: 20px;
            }
            
            .form-label {
                font-size: 16px;
            }
            
            .form-input {
                height: 45px;
                font-size: 14px;
            }
            
            .form-input::placeholder {
                font-size: 14px;
            }
            
            .forgot-password {
                font-size: 14px;
            }
            
            .login-button {
                height: 45px;
                font-size: 16px;
            }
            
            .register-link span {
                font-size: 14px;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                width: 95%;
                padding: 20px;
                margin: 20px auto;
            }
            
            .welcome-title {
                font-size: 24px;
            }
            
            .welcome-subtitle {
                font-size: 18px;
            }
            
            .form-label {
                font-size: 16px;
            }
            
            .form-input {
                height: 45px;
                font-size: 14px;
            }
            
            .form-input::placeholder {
                font-size: 14px;
            }
            
            .forgot-password {
                font-size: 14px;
            }
            
            .login-button {
                height: 45px;
                font-size: 16px;
            }
            
            .register-link span {
                font-size: 14px;
            }
        }

        /* Small-size UI overrides (exclude footer; this page has no footer) */
        .login-container { max-width: 460px; padding: 24px; }
        .welcome-title { font-size: 24px; }
        .welcome-subtitle { font-size: 18px; }
        .form-container { padding: 20px; }
        .form-group { margin-bottom: 14px; }
        .form-label { font-size: 14px; margin-bottom: 6px; }
        .form-input { height: 40px; font-size: 14px; }
        .login-button { height: 40px; font-size: 14px; margin: 14px 0; }
        .register-link span { font-size: 14px; }
    </style>
</head>
<body>
    <!-- Header -->
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

    <!-- Background decorative elements -->
    <div class="bg-element-1"></div>
    <div class="bg-element-2"></div>
    <div class="bg-element-3"></div>
    <div class="bg-element-4"></div>
    <div class="bg-element-5"></div>

    <!-- Main container -->
    <div class="main-container">
        <!-- Spacer to push content down from header -->
        <div class="header-spacer"></div>
        
        <!-- Login container -->
        <div class="login-container">
            <div class="logo-container">
                <img src="<?php echo e(asset('images/Ellipse 1.png')); ?>" alt="Ellipse 1" class="ellipse-1">
                <img src="<?php echo e(asset('images/Ellipse 2.png')); ?>" alt="Ellipse 2" class="ellipse-2">
                <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="EtnhoGring Logo" class="welcome-logo">
            </div>
            <div class="welcome-title">SELAMAT DATANG</div>
            <div class="welcome-subtitle">admin</div>

            <div class="form-container">
                <form method="POST" action="<?php echo e(route('login.perform')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-input" 
                            placeholder="Masukkan nama anda"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-input" 
                            placeholder="Masukkan password"
                            required
                        >
                    </div>

                    <button type="submit" class="login-button">
                        Masuk
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Toggle sidebar via hamburger (garis 3)
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
    </script>
</body>
</html>
