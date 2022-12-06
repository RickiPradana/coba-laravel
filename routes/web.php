<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;


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

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/siswa', [SiswaController::class, 'index'])->name('data');
Route::post('/siswa/tambah', [SiswaController::class, 'tambah']);
Route::patch('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'hapus']);

Route::get('/siswa-list', [SiswaController::class, 'siswaList']);

Route::resource('/guru', GuruController::class);


Route::resource('companies', CompanyController::class);
Route::post('delete-company', [CompanyController::class,'destroy']);

Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-list/{id}/edit', [ProductController::class, 'edit']);
Route::post('product-list/store', [ProductController::class, 'store']);
Route::get('product-list/delete/{id}', [ProductController::class, 'destroy']);