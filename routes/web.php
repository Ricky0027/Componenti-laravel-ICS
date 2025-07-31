<?php

use App\Http\Controllers\colorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [colorController::class, 'colorFunction']);
