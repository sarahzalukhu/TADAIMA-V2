@extends('layouts.app')

@section('content')

<!-- Sejarah Rumah Makan -->
<section class="tentang-kami">
    <div class="container">
        <h2>Sejarah Singkat Berdirinya Rumah Makan Tadaima</h2>
        <p>
            Tadaima Ramen and Coffee merupakan salah satu rumah makan khas Jepang yang terletak di Jl. Gereja 3C, Balige, Sumatera Utara, Indonesia. 
            Berdiri sejak tahun 2023, rumah makan ini menawarkan berbagai jenis ramen autentik dan kopi spesial yang menggugah selera.
        </p>
        <p>
            Dengan konsep interior yang mengusung budaya Jepang, Tadaima Ramen and Coffee menciptakan suasana yang nyaman dan cocok untuk berkumpul bersama keluarga maupun teman-teman. 
            Selain itu, berbagai pilihan menu lainnya seperti rice bowl dan makanan ringan khas Jepang juga tersedia untuk melengkapi pengalaman kuliner pelanggan.
        </p>
        <p>
            Kami berkomitmen untuk selalu memberikan pelayanan terbaik dan menghadirkan hidangan berkualitas dengan cita rasa yang autentik. 
            Nikmati pengalaman bersantap yang berbeda di Tadaima Ramen and Coffee!
        </p>
    </div>
</section>

<!-- Profil Karyawan -->
<section class="profil-karyawan">
    <div class="container">
        <h3>Profil Karyawan</h3>
        <div class="grid-karyawan">
            <div class="card-karyawan"></div>
            <div class="card-karyawan"></div>
            <div class="card-karyawan"></div>
            <div class="card-karyawan"></div>
        </div>
    </div>
</section>

<!-- Galeri -->
<section class="galeri">
    <h3>Galeri</h3>
    <div class="galeri-container">
        <button class="prev">&lt;</button>
        <img src="{{ asset('assets/images/tadaima-interior.jpg') }}" alt="Galeri Tadaima">
        <button class="next">&gt;</button>
    </div>
</section>

<!-- Jam Operasional -->
<section class="jam-operasional">
    <div class="container">
        <h3>Jam Operasional</h3>
        <p>Selasa - Minggu : 09.00 - 19.00</p>
    </div>
</section>

<!-- Lokasi -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Map Penuh</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    .map-container {
      width: 100%;
      height: 100vh; /* Mengisi seluruh tinggi layar */
    }
    .map-container iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }
  </style>
</head>
<body>
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1335.7281160913742!2d99.06247881566183!3d2.3332667096019355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e055e68f70a19%3A0x2fd966f88a685ae!2sTadaima%20Ramen%20and%20Coffee!5e0!3m2!1sid!2sid!4v1745198210015!5m2!1sid!2sid"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</body>
</html>



@endsection
