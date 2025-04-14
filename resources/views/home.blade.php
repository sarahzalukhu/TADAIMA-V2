@extends('layouts.app')

@section('content')

<section class="hero">
    <img src="{{ asset('assets/images/2.jpg') }}" alt="Tadaima Ramen and Coffee">
    <h1>TADAIMA</h1>
    <p>Ramen and Coffee</p>
</section>

<section class="about">
    <div class="container">
        <img src="{{ asset('assets/images/2.jpg') }}" alt="Ramen">
        <div class="text">
            <h2>Tentang Kami</h2>
            <p>Tadaima Ramen and Coffee merupakan rumah makan yang didirikan sejak 2023 dengan nuansa Jepang di Kecamatan Balige, Sumatera Utara.</p>
            <a href="{{ route('about') }}" class="btn">Baca Selengkapnya</a>
        </div>
    </div>
</section>

@endsection
