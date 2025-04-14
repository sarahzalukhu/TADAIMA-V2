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
<section class="lokasi">
    <div class="container">
        <iframe src="https://maps.app.goo.gl/KcE6CSZZndX9kjop8" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection
