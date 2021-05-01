<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;

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


Route::get('/', [ClientController::class, 'index']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/daftarsiswa', [HomeController::class, 'daftarSis']);
Route::get('/home/daftarsiswa/hdf', [HomeController::class, 'hdf']);
Route::post('/home/daftarsiswa/hdf', [HomeController::class, 'store']);


Route::get('/logout', [HomeController::class, 'logout']);
