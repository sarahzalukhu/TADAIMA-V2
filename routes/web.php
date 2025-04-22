<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

use App\Http\Controllers\MenuController;

Route::get('/menu/makanan', [MenuController::class, 'makanan'])->name('menu.makanan');

Route::get('/menu/minuman', function () {
    return view('menu.minuman');
})->name('menu.minuman');

Route::get('/menu/cemilan', function () {
    return view('menu.cemilan');
})->name('menu.cemilan');

Route::get('/pemesanan', function () {
    return view('order');
})->name('order');

use App\Http\Controllers\ReviewController;

Route::get('/ulasan', [ReviewController::class, 'index'])->name('review.index');
Route::post('/ulasan', [ReviewController::class, 'store'])->name('review.store');


Route::post('/pemesanan', function () {

    return back()->with('success', 'Pesanan Anda telah dikirim!');
})->name('order.process');
