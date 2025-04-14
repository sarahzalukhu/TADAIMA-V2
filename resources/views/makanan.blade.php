@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Makanan</h2>
    <div class="row justify-content-center">
        @foreach($menus as $menu)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card text-center shadow-sm">
                <img src="{{ asset('storage/menu/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->name }}</h5>
                    <p class="card-text text-danger"><strong>Rp{{ number_format($menu->price, 0, ',', '.') }},00</strong></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="fixed-bottom d-flex justify-content-end p-4">
        <a href="https://wa.me/6281234567890" class="btn btn-success d-flex align-items-center">
            <i class="bi bi-whatsapp me-2"></i> Pesan atau Reservasi
        </a>
    </div>
</div>
@endsection
