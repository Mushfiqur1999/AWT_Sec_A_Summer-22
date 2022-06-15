<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\StudentController;

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

Route::get('/login',[pageController::class,'login'])->name('login');
Route::post('/login',[StudentController::class,'login'])->name('login');
Route::get('/registation',[pageController::class,'reg'])->name('reg');
Route::post('/registation',[StudentController::class,'reg'])->name('reg');
