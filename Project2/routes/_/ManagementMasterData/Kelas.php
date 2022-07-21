<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\KelasController;

Route::resource('kelas', KelasController::class);