<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleSheetController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/',[GoogleSheetController::class,'index']);
Route::get('/action',[GoogleSheetController::class,'action']);
Route::get('/index-kategori/{kategori}',[GoogleSheetController::class,'indexkategori']);
Route::get('/kategori',[GoogleSheetController::class,'kategori']);
Route::get('/kategori-kategori/{kategori}',[GoogleSheetController::class,'kategorikategori']);
Route::get('/detail/{id}',[GoogleSheetController::class,'detail']);
Route::get('/akun',[GoogleSheetController::class,'akun']);

Route::get('/coba/{id}',[GoogleSheetController::class,'coba']);

