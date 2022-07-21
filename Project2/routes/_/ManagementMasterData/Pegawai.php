<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\PegawaiController;

Route::resource('pegawai', PegawaiController::class); 

