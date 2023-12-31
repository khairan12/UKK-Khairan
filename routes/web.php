<?php
use App\Http\Controllers\LoginController;
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
    return view('welcome'); // menampilkan file welcome.blade.php
});

Route::get('/login', [LoginController::class, 'login']);

Route::get('/register', function(){
    return view('register');
});

Route::get('/home', function(){
    return view('home');
});