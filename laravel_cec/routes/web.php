<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\bookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[loginController::class,'loginpage'])->name('login.index');
Route::post('/login/check',[loginController::class,'check'])->name('login.check');
Route::get('/home',[logincontroller::class,'home'])->name('home.index');
Route::get('/logout',[logincontroller::class,'logout'])->name('home.logout');

Route::get('/home/create-book',[bookController::class,'create'])->name('home.create');
Route::post('/home/store-book',[bookController::class,'store'])->name('home.store');
Route::get('/home/book/{id}/edit',[bookController::class,'edit'])->name('home.edit');
Route::post('/home/book/{id}/update',[bookController::class,'update'])->name('home.update');
Route::get('/home/book/{id}/delete',[bookController::class,'destroy'])->name('home.delete');
