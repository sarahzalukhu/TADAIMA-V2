<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tadaima - Ramen and Coffee</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('order') }}">Pemesanan</a></li>
                <li><a href="{{ route('review') }}">Ulasan</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Tadaima">
        </div>

        <div class="footer-info">
            <p>Jln Gereja No 3 C,<br>Balige, Sumatera Utara,<br>Indonesia</p>
            <p>WhatsApp : +82 10-3925-6499<br>Email : <a href="mailto:tadaimaramencoffee@gmail.com">tadaimaramencoffee@gmail.com</a></p>
        </div>

        <div class="footer-sosmed">
            <p><strong>Sosial Media</strong></p>
            <a href="https://www.instagram.com/tadaimaramen" target="_blank">
                <i class="fab fa-instagram"></i> @tadaimaramen
            </a><br>
            <a href="https://www.tiktok.com/@tadaimaramen" target="_blank">
                <i class="fab fa-tiktok"></i> @tadaimaramen
            </a>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Tadaima Ramen and Coffee. All rights reserved</p>
    </div>
</footer>


</body>
</html>
