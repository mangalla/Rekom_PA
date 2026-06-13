<?php

use App\Http\Controllers\RekomendasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RekomendasiController::class, 'index']);
