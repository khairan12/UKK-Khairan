<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\DataProdukController;
use App\Http\Controllers\DataPelangganController;
use App\Http\Controllers\UpdatePelangganController;
use App\Http\Controllers\UpdateProdukController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\TambahProdukController;
use App\Http\Controllers\TambahPelangganController;
use App\Http\Controllers\DataPenjualanController;
use App\Http\Controllers\DetailPenjualanController;

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
    return view('welcome'); // menampilkan file welcome.blade.php
});

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', [registerController::class, 'register']);

Route::get('/home', [homeController::class, 'home']);

Route::get('/DataProduk', [DataProdukController::class, 'DataProduk']);

Route::get('/DataPelanggan', [DataPelangganController::class, 'DataPelanggan']);

Route::get('/UpdatePelanggan', [UpdatePelangganController::class, 'UpdatePelanggan']);

Route::get('/UpdateProduk', [UpdateProdukController::class, 'updateProduk']);

Route::get('/penjualan', [penjualanController::class, 'penjualan']);

Route::get('/TambahProduk', [TambahProdukController::class, 'TambahProduk']);

Route::get('/TambahPelanggan', [TambahPelangganController::class, 'TambahPelanggan']);

Route::get('/DataPenjualan', [DataPenjualanController::class, 'DataPenjualan']);

Route::get('/DetailPenjulan', [DetailPenjualanController::class, 'DetailPenjualan']);

