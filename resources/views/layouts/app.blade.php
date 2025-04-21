<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tadaima - Ramen and Coffee</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 

   
    <!-- ... tag meta, title, dll -->
    @stack('styles') <!-- Ini wajib agar CSS masuk -->

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

        <li class="dropdown">
    <a href="#">Menu</a>
    <ul class="dropdown-content">
        <li><a href="{{ route('menu.makanan') }}">Makanan</a></li>
        <li><a href="{{ route('menu.minuman') }}">Minuman</a></li>
        <li><a href="{{ route('menu.cemilan') }}">Cemilan</a></li>
    </ul>
</li>
<li>
  <a href="https://wa.me/6281396537191?text=Halo%2C%20saya%20ingin%20memesan%20makanan" target="_blank">
    Pemesanan
  </a>
</li>

        <li><a href="{{ route('review.index') }}">Ulasan</a></li>
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
            <p><strong>Lokasi</strong></p>
            <p>Jln Gereja No 3 C,<br>Balige, Sumatera Utara,<br>Indonesia</p>
        </div>

        <div class="footer-links">
            <p><strong>Menu</strong></p>
            <a href="#beranda">Beranda</a><br>
            <a href="#tentang">Tentang Kami</a><br>
            <a href="#menu">Menu</a><br>
            <a href="#pesanan">Pemesanan</a><br>
            <a href="#ulasan">Ulasan</a>
        </div>

        <div class="footer-sosmed">
            <p><strong>Sosial Media</strong></p>
            <a href="https://www.instagram.com/tadaimaramen" target="_blank">
                <i class="fab fa-instagram"></i> tadaimaramen
            </a><br>
            <a href="https://www.tiktok.com/@tadaimaramen" target="_blank">
                <i class="fab fa-tiktok"></i> tadaimaramen
            </a>
            <p><strong>Kontak</strong></p>
            <p><i class="fab fa-whatsapp"></i> +82 10-3925-6499</p>
            <p><i class="far fa-envelope"></i>
                <a href="mailto:tadaimaramencoffee@gmail.com">tadaimaramencoffee@gmail.com</a>
            </p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Tadaima Ramen and Coffee. All rights reserved</p>
    </div>
</footer>



</body>
</html>
