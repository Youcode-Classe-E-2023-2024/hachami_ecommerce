<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use \App\Http\Controllers\AuthController;
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



//Route::get('/', [ProductController::class,'index'])->name('home');
//Route::get('/product/{id}',[ProductController::class,'show'])->name('productDetails');


Route::get('/register',function (){
    return view('auth.register');
})->name('register');
Route::post('/register',[AuthController::class,'register'])->name('register');


Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/', [ProductController::class,'index'])->name('home');
Route::get('/product/{id}',[ProductController::class,'show'])->name('productDetails');

Route::group(['middleware' => 'custom.role'], function () {
    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/addcatgoery',[CategoryController::class,'addcategory']);





});

// Handle 403 Forbidden
Route::get('/forbidden', function () {
    return "not";
});
