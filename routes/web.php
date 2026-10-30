<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;

Route::get('/', [HomeController::class, 'index'])
    ->name('beranda');

Route::get('/profil', [HomeController::class, 'profil'])
    ->name('profil');

Route::get('/keahlian', [PortofolioController::class, 'keahlian'])
    ->name('keahlian');

Route::get('/proyek', [PortofolioController::class, 'proyek'])
    ->name('proyek');

Route::get('/proyek/{id}', [PortofolioController::class, 'detailProyek'])
    ->whereNumber('id')
    ->name('detail-proyek');