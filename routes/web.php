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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\home_controller;
use App\Http\Controllers\productController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\programController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\contactUsController;

Route::get('/',[home_controller::class, 'home']);

//Route Prefix Category//
Route::prefix('/category')->group(function(){
    Route::get('/productproduct', [productController::class, 'productproduct']);
});

//Route Param News//
Route::get('news', [newsController::class, 'news']);
Route::get('news/{title}', [newsController::class, 'news']);

//Route Prefix Program//
Route::prefix('/program')->group(function(){
    Route::get('/programprogram', [programController::class, 'programprogram']);
});

//Route Biasa About Us//
Route::get('aboutus',[aboutUsController::class, 'aboutus']);

//Route Contact Us//
Route::resource('/contactus', contactUsController::class,);

Route::get('halo',[ContohController::class, 'halo_1'])->name('halo1');

