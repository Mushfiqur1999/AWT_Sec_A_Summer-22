<?php
namespace App\Http\Controllers;

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

Route::get('/',[ProductController::class,'homeload'])->name('home');
Route::get('/create',[ProductController::class,'createpage'])->name('createpage');
Route::get('/product/details/{id}',[PagesController::class,'viewdetails'])->name('product.details');
Route::post('/create',[ProductController::class,'savevalue'])->name('create.product');
