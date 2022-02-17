<?php

use App\Http\Controllers\Api\V1\HireController;
use Illuminate\Support\Facades\Route;

Route::post('v1/hiring', [HireController::class, 'store'])
    ->middleware('honeypot')
    ->name('api.hiring.store');
