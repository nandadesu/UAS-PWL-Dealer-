<?php

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

Route::get('/', "ApiController@index")->name("welcome");
Route::group(['prefix' => 'admin'], function () {
    // Auth::routes([
    //     'register' => false, // Registration Routes...
    //     'reset' => false, // Password Reset Routes...
    //     'verify' => false, // Email Verification Routes...
    // ]);
    Route::redirect('/', '/admin/home');
    Route::group(['middleware' => ['auth']], function () {
        Route::get("/home", "AdminController@index")->name("admin.index");
    });
});

// Route::get('/home', 'HomeController@index')->name('home');
Route::get("/mobil/{id}", "ApiController@mobil_index")->name("mobil.index");
Route::get("/mobil/{id}/pesan", "ApiController@mobil_pesan")->name("mobil.pesan");
Route::post("/mobil/{id}/pesan", "ApiController@proses_pesan")->name("mobil.proses_pesan");
Route::get("/pesanan/{kode}", "ApiController@pesanan_index")->name("mobil.profil_pesanan");
Route::get("/mobil/lorem-ipsum/pesanan", "MobilController@process")->name("mobil.pesanan");
