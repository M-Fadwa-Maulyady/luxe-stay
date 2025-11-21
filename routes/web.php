<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenginapanController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});

Route::get('/', function () {
    return view('landing');
});

    Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/create', [KategoriController::class, 'create'])->name('createKategori');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('storeKategori');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('editKategori');
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('updateKategori');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('deleteKategori');

    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
    Route::get('/fasilitas/create', [FasilitasController::class, 'create'])->name('createFasilitas');
    Route::post('/fasilitas/store', [FasilitasController::class, 'store'])->name('storeFasilitas');
    Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('editFasilitas');
    Route::put('/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('updateFasilitas');
    Route::delete('/fasilitas/delete/{id}', [FasilitasController::class, 'destroy'])->name('deleteFasilitas');

    Route::get('/penginapan', [PenginapanController::class, 'index'])->name('penginapan');
    Route::get('/penginapan/create', [PenginapanController::class, 'create'])->name('createPenginapan');
    Route::post('/penginapan/store', [PenginapanController::class, 'store'])->name('storePenginapan');
    Route::get('/penginapan/edit/{id}', [PenginapanController::class, 'edit'])->name('editPenginapan');
    Route::put('/penginapan/update/{id}', [PenginapanController::class, 'update'])->name('updatePenginapan');
    Route::delete('/penginapan/delete/{id}', [PenginapanController::class, 'destroy'])->name('deletePenginapan');

Route::get('/hotel', function () {
    return view('detail.hotel');
});

Route::get('/villa', function () {
    return view('detail.villa');
});

Route::get('/apartemen', function () {
    return view('detail.apartemen');
});

Route::get('/hilton', function () {
    return view('check.hilton');
});

Route::get('/radisson', function () {
    return view('check.radisson');
});

Route::get('/hawai', function () {
    return view('check.hawai');
});

Route::get('/tropis', function () {
    return view('check.tropis');
});

Route::get('/syariah', function () {
    return view('check.syariah');
});

Route::get('/center', function () {
    return view('check.center');
});
