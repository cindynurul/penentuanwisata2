<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'welcome']);
Route::get('/home', function() {
    return view('home');
});
Route::get('beranda/{kategori:slug}', [FrontController::class, 'berandakategori']);
Route::get('beranda/', [FrontController::class, 'beranda']);
Route::get('objek-wisata/', [FrontController::class, 'objekwisata']);
Route::get('objek-wisata/{kategori:slug}', [FrontController::class, 'wisatakategori']);
Route::get('{wisata:slug}/detail', [FrontController::class, 'wisatadetail']);
Route::get('{wisata:slug}/galeriwisata', [FrontController::class, 'wisatagaleri']);
Route::get('artikel/', [FrontController::class, 'artikel']);
Route::get('{artikel:slug}/selengkapnya', [FrontController::class, 'artikeldetail']);

Auth::routes([
    'register' => false
]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('profile', function() {
        return 'halaman profile admin';
    });
    Route::resource('kategori', KategoriController::class);
    Route::resource('wisata', WisataController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('artikel', ArtikelController::class);

});

Route::get('about', function(){
    return view('about');
});
Route::get('welcome', function(){
    return view('welcome');
});
Route::get('contact', function(){
    return view('contact');
});

