<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\AbsensiController;

Route::get('absensi', AbsensiController::class);
Route::post('absensi', [AbsensiController::class, 'store']);
Route::get('absensi/list', [AbsensiController::class, 'list']);