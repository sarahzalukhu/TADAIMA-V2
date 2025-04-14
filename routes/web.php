<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/pemesanan', function () {
    return view('order');
})->name('order');

Route::get('/ulasan', function () {
    return view('review');
})->name('review');

// Rute untuk memproses pemesanan
Route::post('/pemesanan', function () {
    // Proses pemesanan di sini
    return back()->with('success', 'Pesanan Anda telah dikirim!');
})->name('order.process');
