{{-- resources/views/pemesanan.blade.php --}}
@extends('layouts.app')

@section('content')
    <style>
        .pemesanan-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 80vh;
            font-family: sans-serif;
            background-color: #fff;
            padding: 40px 20px;
        }

        .pemesanan-logo {
            width: 180px;
            height: auto;
            margin-bottom: 20px;
        }

        .pemesanan-button {
            background-color: #28a745;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .pemesanan-button:hover {
            background-color: #218838;
        }
    </style>

    <div class="pemesanan-container">
        <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Tadaima" class="pemesanan-logo">

        <a href="https://wa.me/6281396537191?text=Halo%20saya%20ingin%20melakukan%20pemesanan"
           target="_blank"
           class="pemesanan-button">
            Lanjutkan untuk mengirim pesan
        </a>
    </div>
@endsection
