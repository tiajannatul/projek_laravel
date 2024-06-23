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

Route::get('/', function () {
    return view('welcome');
});

//route CRUD
use App\Http\Controllers\PegawaiController;
Route::get('/pegawai', [App\Http\Controllers\PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/tambah', [App\Http\Controllers\PegawaiController::class, 'tambah'])->name('pegawai/tambah');
Route::post('/pegawai/store', [App\Http\Controllers\PegawaiController::class, 'store'])->name('pegawai/store');
Route::get('/pegawai/edit/{id}', [App\Http\Controllers\PegawaiController::class, 'edit'])->name('pegawai/edit');
Route::post('/pegawai/update', [App\Http\Controllers\PegawaiController::class, 'update'])->name('pegawai/update');
Route::get('/pegawai/hapus/{id}', [App\Http\Controllers\PegawaiController::class, 'hapus'])->name('pegawai/hapus');
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);
Route::post('/pegawai/tambah', [PegawaiController::class, 'store']);


use App\Http\Controllers\MalasngodingController;
Route::get('/input', [MalasngodingController::class, 'input']);
Route::post('/proses', [MalasngodingController::class, 'proses']);

use App\Http\Controllers\PegawaisController;
Route::get('/pegawais', [PegawaisController::class, 'index']);
Route::get('/pegawais/tambah', [PegawaisController::class, 'tambah']);
Route::post('/pegawais/store', [PegawaisController::class, 'store']);
Route::get('/pegawais/edit/{id}', [PegawaisController::class, 'edit']);
Route::put('/pegawais/update/{id}', [PegawaisController::class, 'update']);
Route::get('/pegawais/hapus/{id}', [PegawaisController::class, 'delete']);

//routeguru
use App\Http\Controllers\GuruController;
Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/hapus/{id}', [GuruController::class, 'hapus']);
Route::get('/guru/trash', [GuruController::class, 'trash']);
Route::get('/guru/kembalikan/{id}', [GuruController::class, 'kembalikan']);
Route::get('/guru/kembalikan_semua', [GuruController::class, 'kembalikan_semua']);
Route::get('/guru/hapus_permanen/{id}', [GuruController::class, 'hapus_permanen']);
Route::get('/guru/hapus_permanen_semua', [GuruController::class, 'hapus_permanen_semua']);


use App\Http\Controllers\PenggunaController;
Route::get('/pengguna', [PenggunaController::class, 'index']);

use App\Http\Controllers\WebController;
Route::get('/article', [WebController::class, 'index']);

use App\Http\Controllers\DikiController;
Route::get('/anggota', [DikiController::class, 'index']);


  