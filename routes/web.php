<?php

use App\Http\Controllers\DaftokoController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\user\IndexController;
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

// End-User Routing //
Route::get('/', [IndexController::class, 'root'])->name('root');

// ``````` //



// Admin Login Routing 

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');

    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');;

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    
// ``````` //



 // Panel Admin Prefix
Route::prefix('/admin')->middleware('auth')->group(function () {

    // Index Routing Admin Panel
    Route::get('/', [PanelController::class, 'index']);

    Route::resource('/hero', HeroController::class);
    
    Route::resource('/tentang', TentangController::class);

    Route::resource('/fitur', FiturController::class);

    Route::resource('/kategori', KategoriController::class);

    Route::resource('/map', MapController::class);

    Route::resource('/daftoko', DaftokoController::class);
});