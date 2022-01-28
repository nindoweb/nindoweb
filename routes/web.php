<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\LaunchController;
use App\Http\Controllers\Front\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);

Route::group(['prefix' => 'posts/', 'as' => 'posts.'] , function () {
   Route::get('', [PostController::class, 'postList'])->name('list');
   Route::get('{post:code}/{postSlug}/', [PostController::class, 'postDetail'])->name('detail');
});

Route::group(['prefix' => 'launch/', 'as' => 'launch.'], function () {
    Route::get('', [LaunchController::class, 'show'])->name('show');
    Route::post('store/', [LaunchController::class, 'store'])
        ->middleware('honeypot')
        ->name('store');
});
