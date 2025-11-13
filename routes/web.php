<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('createKategori');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('storeKategori');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('editKategori');
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('updateKategori');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('deleteKategori');