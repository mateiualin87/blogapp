<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home.index');
})->name('home.index');

Route::get('/blog', [App\Http\Controllers\BlogController::class,'index'])->name('blog.index');

Route::get('/blog/create', [App\Http\Controllers\BlogController::class,'create'])->name('blog.create');

Route::post('/blog.store',[App\Http\Controllers\BlogController::class,'store'])->name('blog.store');
