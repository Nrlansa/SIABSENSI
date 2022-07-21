<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\RuanganController;

Route::resource('ruangan', RuanganController::class);