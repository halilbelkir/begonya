<?php

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

Route::get('/', function () {return view('front.index');})->name('index');
Route::get('/hakkimizda', function () {return view('front.about');})->name('about');
Route::get('/hizmetlerimiz', function () {return view('front.services.list');})->name('services.list');
Route::get('/hizmetlerimiz/hizmet-baslik', function () {return view('front.services.detail');})->name('services.detail');
Route::get('/referanslarimiz', function () {return view('front.clients');})->name('clients');
Route::get('/odullerimiz', function () {return view('front.awards');})->name('awards');
Route::get('/egitimler-ve-dernegimiz', function () {return view('front.trainings');})->name('trainings');
Route::get('/galeri', function () {return view('front.gallery');})->name('gallery');
Route::get('/blog', function () {return view('front.blog.list');})->name('blog.list');
Route::get('/blog/blog-baslik', function () {return view('front.blog.detail');})->name('blog.detail');
Route::get('/basinda-biz', function () {return view('front.media');})->name('media');
Route::get('/yurtdisi-online-danismanlik', function () {return view('front.online');})->name('online');
Route::get('/iletisim', function () {return view('front.contact');})->name('contact');
