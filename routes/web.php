<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\RencanaPengadaanController;
use App\Http\Controllers\PeminjamanInvController;
use App\Http\Controllers\PeminjamanArsipController;

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
    $data = array(
        'menu' => 'MasterTambahData',
        'submenu' => 'tambahdata',
    );

    return view('dashboard',$data);
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/view_barang', [BarangController::class, 'index']);
Route::get('/barang/form_barang', [BarangController::class, 'insertBarang']);
Route::post('/barang/form_barang', [BarangController::class, 'tambahBarang']);

Route::get('/view_inventaris', [InventarisController::class, 'index']);

Route::get('/view_arsip', [ArsipController::class, 'index']);
Route::get('/arsip/form_arsip', [ArsipController::class, 'insertArsip']);
Route::post('/arsip/form_arsip', [ArsipController::class, 'tambahArsip']);

Route::get('/view_rencana_pengadaan', [RencanaPengadaanController::class, 'index']);
Route::get('/rencana_pengadaan/form_rencana_pengadaan', [RencanaPengadaanController::class, 'insertRencanaPengadaan']);
Route::post('/rencana_pengadaan/form_rencana_pengadaan', [RencanaPengadaanController::class, 'tambahRencanaPengadaan']);

Route::get('/view_pengadaan', [PengadaanController::class, 'index']);
Route::post('/pengadaan/dropdownPengadaan', [PengadaanController::class, 'dropdownPengadaan']);
Route::get('/pengadaan/form_pengadaan', [PengadaanController::class, 'insertPengadaan']);
Route::post('/pengadaan/tambahPengadaan', [PengadaanController::class, 'tambahPengadaan']);

Route::get('/view_peminjaman_inv', [PeminjamanInvController::class, 'index']);

Route::get('/view_peminjaman_arsip', [PeminjamanArsipController::class, 'index']);