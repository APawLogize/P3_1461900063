<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;

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
    return view('welcome');
});
Route::get('/barang', [DbController::class, 'index']); 
Route::get('/barang/tambah', [DbController::class, 'tambah']);
Route::get('/barang/hapus/{id}', [DbController::class, 'hapus']); 
Route::post('/barang/store', [DbController::class, 'store']);
Route::get('/barang/edit/{id}', [DbController::class, 'edit']); 
Route::post('/barang/update', [DbController::class, 'update']);
Route::get('/barang/cari', [DbController::class, 'cari']);