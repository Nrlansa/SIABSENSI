<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MinipcController;

Route::post('absen', [MinipcController::class, 'store']);