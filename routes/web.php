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

route::get('/form',[App\Http\Controllers\text::class,'form'] );
route::post('/text/result',[App\Http\Controllers\text::class,'result'] );
Route::match(['get', 'post'], '/pg', [App\Http\Controllers\text::class,'pg'] );
Route::match(['get', 'post'],'/all',[App\Http\Controllers\text::class,'all'] );


Route::match(['get', 'post'],'/all',[App\Http\Controllers\text::class,'dfgdfg'] );


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test/index',[App\Http\Controllers\UserController::class,'index'] );
Route::get('/aboutUs',[App\Http\Controllers\ProductController::class,'ok'] );
Route::get('/findUs',[App\Http\Controllers\FindUsController::class,'where'] );
Route::get('/catalog',[App\Http\Controllers\ProductController::class,'produkt'] );

