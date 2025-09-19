<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);

// simple view route of dashbord 
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');