<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1. Halaman utama: data dinamis (array) dikirim dari route ke view
Route::get('/', function () {
    return view('home', [
        'nama'     => 'ISI_NAMA_LENGKAP',
        'nim'      => 'ISI_NIM',
        'kelas'    => 'ISI_KELAS',
        'courses'  => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Laravel'],
    ]);
})->name('home');

// 2. About: memakai controller (hasil php artisan make:controller PageController)
Route::get('/about', [PageController::class, 'about'])->name('about');

// 3. Contact: data dinamis (array) dari route
Route::get('/contact', function () {
    return view('contact', [
        'contacts' => [
            'Email'     => 'ISI_EMAIL_KAMPUS',
            'GitHub'    => 'github.com/ISI_USERNAME_GITHUB',
            'Instagram' => '@ISI_USERNAME_IG',
        ],
    ]);
})->name('contact');

// BONUS: route parameter /hello/{nama}
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['nama' => ucfirst($nama)]);
})->name('hello');
