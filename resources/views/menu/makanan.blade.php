@extends('layouts.app')

@push('styles')
    <style>
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); /* Lebar minimum card lebih besar */
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
            max-height: 280px; /* Lebih tinggi */
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
    </style>
@endpush


@section('content')
    <h1 style="text-align: center; margin: 30px 0;">Daftar Menu Makanan</h1>

    <div class="menu-grid">
        @foreach ($menus as $menu)
            @php
                $gambar = $menu->gambar && file_exists(public_path('assets/images/' . $menu->gambar)) 
                    ? $menu->gambar 
                    : 'default.jpg';
            @endphp
            <div class="menu-card">
                <img src="{{ asset('assets/images/' . $gambar) }}" alt="{{ $menu->nama }}">
                <div class="menu-info">
                    <h3>{{ $menu->nama }}</h3>
                    <p>Rp {{ number_format($menu->harga, 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
