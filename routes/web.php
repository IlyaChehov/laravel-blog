<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.index')->name('index');
    Route::resource('category', CategoryController::class)->except('show');
    Route::resource('post', PostController::class);
});
