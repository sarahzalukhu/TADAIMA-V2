@extends('layouts.app') {{-- Pastikan kamu punya layout utama --}}
@section('title', 'Daftar Menu Minuman')

@section('content')
<style>
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        padding: 0 40px;
    }

    .menu-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .menu-card:hover {
        transform: scale(1.05);
    }

    .menu-card img {
        width: 100%;
        max-height: 280px;
        aspect-ratio: 4 / 3;
        object-fit: cover;
        border-bottom: 6px solid #f8b400;
        border-radius: 20px 20px 0 0;
        transition: transform 0.3s ease, filter 0.3s ease;
        filter: brightness(95%);
    }

    .menu-card:hover img {
        transform: scale(1.08);
        filter: brightness(100%) saturate(115%);
    }

    .menu-info {
        padding: 25px;
    }

    .menu-info h3 {
        margin: 15px 0 8px;
        font-size: 24px;
        color: #222;
        font-weight: 600;
    }

    .menu-info p {
        margin: 0;
        color: #555;
        font-size: 20px;
        font-weight: bold;
    }

    .btn-lg {
        padding: 12px 30px;
        font-size: 20px;
        border-radius: 10px;
    }
</style>

<div class="container mt-5">
    <h2 class="text-center mb-4">Minuman</h2>
    <div class="menu-grid">
        @foreach ($minumans as $minuman)
            <div class="menu-card">
                <img src="{{ asset('images/' . $minuman->gambar) }}" alt="{{ $minuman->nama }}">
                <div class="menu-info">
                    <h3>{{ $minuman->nama }}</h3>
                    <p>Rp{{ number_format($minuman->harga, 0, ',', '.') }}</p>
                    @if (str_contains(strtolower($minuman->nama), 'new'))
                        <span class="badge bg-warning text-dark">NEW MENU</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    {{-- Tombol Reservasi --}}
    <div class="text-center mt-4">
        <a href="https://wa.me/6281234567890" class="btn btn-success btn-lg">
            Pesan atau Reservasi
        </a>
    </div>
</div>
@endsection
