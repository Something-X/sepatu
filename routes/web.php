<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/oxfordjazz', function () {
    return view('barang.oxfordjazz');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/b1', function () {
    return view('barang.b1');
});
