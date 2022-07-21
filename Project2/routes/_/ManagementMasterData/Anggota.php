<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\AnggotaController;

Route::resource('anggota', AnggotaController::class);