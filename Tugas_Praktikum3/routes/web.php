<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/{path?}', function () {
    return view('welcome');
})->where('path', 'welcome');

Route::get('/dosen', function () {
    $data = [
        'Gojo Satoru', 'Geto Suguru', 'Alhaitham', 'Zhongli', 'Raiden Ei', 
        'Albedo', 'Sherlock Holmes', 'James Moriarty', 'Miguel O`Hara', 'Aldi Taher'
    ];

    return view('dosen', ['data' => $data]);
});

Route::get('/mahasiswa', function () {
    $data = [
        'Kim Mingyu', 'Maki Zenin', 'Karina', 'Kim Yoohyeon', 'Thomas', 
        'Kim Dokja', 'Leah Mardisiah', 'Muhammad Ibnu', 'Hoshino Ai', 'Juliette'
    ];

    return view('mahasiswa', ['data' => $data]);
});

Route::get('/matakuliah', function () {
    $data = [
        'Pemrograman Web', 'Pemrograman Mobile', 'Statistika', 'Aljabar', 'Fisika Modern', 
        'Artificial', 'Sistem Operasi', 'Algoritma', 'Jaringan', 'Bahasa'
    ];

    return view('matakuliah', ['data' => $data]);
});

Route::fallback(function () {
    return "Halaman yang Anda cari tidak ditemukan";
});
