<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\WebPage;
use App\Http\Controllers\FormIslemleri;
use App\Http\Controllers\Veritabaniislemleri;
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

// Route::get('/test', function () {
//     return view('ornek');
// });

// Route::get('/test', [Ornek::class,'test']);

Route::get('/test/{isim}', [Ornek::class,'test']);

Route::get('/web', [WebPage::class,'site'])->name('home');

Route::get('/form', [FormIslemleri::class,'gorunum'])->name('form');

Route::middleware('arakontrol')->post('/form-sonuc', [FormIslemleri::class,'sonuc'])->name('sonuc');

Route::get('/ekle', [Veritabaniislemleri::class,'ekle']);
Route::get('/guncelle', [Veritabaniislemleri::class,'guncelle']);
Route::get('/sil', [Veritabaniislemleri::class,'sil']);
Route::get('/listele', [Veritabaniislemleri::class,'bilgiler']);
