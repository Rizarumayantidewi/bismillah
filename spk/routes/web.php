<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::POST('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::PUT('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');

Route::get('/alternative', [App\Http\Controllers\AlternativeController::class, 'index'])->name('alternative.index');
Route::get('/alternative/create', [App\Http\Controllers\AlternativeController::class, 'create'])->name('alternative.create');
Route::POST('/alternative/store', [App\Http\Controllers\AlternativeController::class, 'store'])->name('alternative.store');
Route::get('/alternative/edit/{id}', [App\Http\Controllers\AlternativeController::class, 'edit'])->name('alternative.edit');
Route::PUT('/alternative/update/{id}', [App\Http\Controllers\AlternativeController::class, 'update'])->name('alternative.update');
Route::get('/alternative/delete/{id}', [App\Http\Controllers\AlternativeController::class, 'destroy'])->name('alternative.delete');

Route::get('/kriteria', [App\Http\Controllers\KriteriaController::class, 'index'])->name('kriteria.index');
Route::get('/kriteria/create', [App\Http\Controllers\KriteriaController::class, 'create'])->name('kriteria.create');
Route::POST('/kriteria/store', [App\Http\Controllers\KriteriaController::class, 'store'])->name('kriteria.store');
Route::get('/kriteria/edit/{id}', [App\Http\Controllers\KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::PUT('/kriteria/update/{id}', [App\Http\Controllers\KriteriaController::class, 'update'])->name('kriteria.update');
Route::get('/kriteria/delete/{id}', [App\Http\Controllers\KriteriaController::class, 'destroy'])->name('kriteria.delete');

Route::get('/subkriteria/create', [App\Http\Controllers\SubkriteriaController::class, 'create'])->name('subkriteria.create');
Route::POST('/subkriteria/store', [App\Http\Controllers\SubkriteriaController::class, 'store'])->name('subkriteria.store');
Route::get('/subkriteria/edit/{id}', [App\Http\Controllers\SubkriteriaController::class, 'edit'])->name('subkriteria.edit');
Route::PUT('/subkriteria/update/{id}', [App\Http\Controllers\SubkriteriaController::class, 'update'])->name('subkriteria.update');
Route::get('/subkriteria/delete/{id}', [App\Http\Controllers\SubkriteriaController::class, 'destroy'])->name('subkriteria.delete');


Route::get('/matriks', [App\Http\Controllers\DataAwalController::class, 'index'])->name('dataawal.index');
Route::get('/matriks/create', [App\Http\Controllers\DataAwalController::class, 'create'])->name('dataawal.create');
Route::POST('/matriks/store', [App\Http\Controllers\DataAwalController::class, 'store'])->name('dataawal.store');
Route::get('/matriks/edit/{id}', [App\Http\Controllers\DataAwalController::class, 'edit'])->name('dataawal.edit');
Route::PUT('/matriks/update/{id}', [App\Http\Controllers\DataAwalController::class, 'update'])->name('dataawal.update');
Route::get('/matriks/delete/{id}', [App\Http\Controllers\DataAwalController::class, 'destroy'])->name('dataawal.destroy');

Route::get('/normalisasi', [App\Http\Controllers\NormalisasiController::class, 'index'])->name('normalisasi.index');
Route::get('/hasil-akhir', [App\Http\Controllers\HasilAkhirController::class, 'index'])->name('hasilakhir.index');
Route::get('/hasil-analisa', [App\Http\Controllers\AnalisaController::class, 'index'])->name('analisa.index');
});
