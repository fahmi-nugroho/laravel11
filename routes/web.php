<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Fahmi Nugroho']);
});

Route::get('/blog', function () {
    return view('blog', ['articles' => [
        (object) [
            'title' => 'Artikel Pertama',
            'text'  => 'Ini adalah artikel yang diubat pertama kali menggunakan laravel 11'
        ],
        (object) [
            'title' => 'Artikel Terakhir',
            'text'  => 'Ini adalah artikel yang diubat terakhir kali menggunakan laravel 11'
        ],
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['contacts' => (object) [
        'name'     => 'Fahmi Nugroho Alibasyah',
        'email'     => 'fahminugroho23@gmail.com',
        'github'    => 'fahmi-nugroho',
        'linkedin'    => 'Fahmi Nugroho',
    ]]);
});