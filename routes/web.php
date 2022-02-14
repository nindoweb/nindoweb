<?php

use App\Http\Controllers\HireController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaunchController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'posts/', 'as' => 'posts.'] , function () {
   Route::get('', [PostController::class, 'postList'])->name('list');
   Route::get('{post:code}/{postSlug}/', [PostController::class, 'postDetail'])->name('detail');
});

Route::group(['prefix' => 'launch/', 'as' => 'launch.'], function () {
    Route::get('', [LaunchController::class, 'create'])->name('create');
    Route::post('store/', [LaunchController::class, 'store'])
        ->middleware('honeypot')
        ->name('store');
});

Route::group(['prefix' => 'hiring/', 'as' => 'hiring.'], function () {
    Route::get('', [HireController::class, 'create'])->name('create');
    Route::post('store/', [HireController::class, 'store'])
        ->middleware('honeypot')
        ->name('store');
});

Route::group(['prefix' => 'sitemap.xml/'], function () {
    Route::get('', [SitemapController::class, 'index']);
    Route::get('posts', [SitemapController::class, 'posts']);
});

Route::group(['prefix' => 'teams', 'as' => 'teams.'], function () {
    Route::get('', [TeamController::class, 'index'])->name('index');
});
