<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;


Route::get('/',[MyController::class, 'viewLoad'])->name('');
Route::get('/about',[MyController::class, 'aboutPage'])->name('about.show');
Route::get('/service',[MyController::class, 'servicePage'])->name('service.show');
Route::get('/ourTeam',[MyController::class, 'teamPage'])->name('ourTeam.show');
Route::get('/contact',[MyController::class, 'contactPage'])->name('contact.show');