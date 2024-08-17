<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Teacher;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProductController;



Route::get('teacher',[Teacher::class, 'index'])->name('teacher');
Route::get('/', [StudentsController::class, 'index']);

Route::get('/products', [ProductController::class, 'show']);
