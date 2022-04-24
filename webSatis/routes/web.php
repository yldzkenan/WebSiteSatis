<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register','register');
Route::post("/register",[UserController::class,'register']);

Route::get('/adminlog', function () {
    return view('adminlog');
});

Route::get('/adminlogout', function () {
    Session::forget('admin');
    return redirect('adminlog');
});
Route::post("/adminlog",[AdminController::class,'login']);
Route::get("/adminkullanicilar",[AdminController::class,'kullanicigetir']);
Route::get("/adminkullanicilar/ekle",[AdminController::class,'ekle']);
Route::post("/adminkullanicilar/ekle",[AdminController::class,'ekle_post']);



Route::get("/admingoster",[AdminController::class,'adminGetir']);
Route::get("/admingoster/ekle",[AdminController::class,'adminEkle']);
Route::post("/admingoster/ekle",[AdminController::class,'adminEkle_post']);

Route::get("/admingoster/duzenle/{id}",[AdminController::class,'adminDuzenle']);
Route::post("/admingoster/duzenle/{id}",[AdminController::class,'adminDuzenle_post']);

Route::get("/admingoster/sil/{id}",[AdminController::class,'adminSil']);



Route::get("/adminurunler",[AdminController::class,'urungetir']);

Route::get("/adminurunler/ekle",[AdminController::class,'urun_ekle']);
Route::post("/adminurunler/ekle",[AdminController::class,'urun_ekle_post']);

Route::get('/admin', function () {
    return view('admin');
});

Route::get("/adminkullanicilar/duzenle/{id}",[AdminController::class,'duzenle']);
Route::post("/adminkullanicilar/duzenle/{id}",[AdminController::class,'duzenle_post']);

Route::get("/adminkullanicilar/sil/{id}",[AdminController::class,'sil']);

Route::get("/adminurunler/duzenle/{id}",[AdminController::class,'urunlerDuzenle']);
Route::post("/adminurunler/duzenle/{id}",[AdminController::class,'urunlerDuzenle_post']);

Route::get("/adminurunler/sil/{id}",[AdminController::class,'urunlerSil']);





Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);



Route::get("/kategoriilk",[ProductController::class,'kategoriilk']);
Route::get("/kategoriiki",[ProductController::class,'kategoriiki']);
Route::get("/kategoriuc",[ProductController::class,'kategoriuc']);
Route::get("/kategoridort",[ProductController::class,'kategoridort']);



Route::get('/kullanicisayfasi', function () {
    return view('kullanicisayfasi');
});

Route::post("/kullanicisayfasi/duzenle/{id}",[ProductController::class,'KullaniciDuzenle_post']);