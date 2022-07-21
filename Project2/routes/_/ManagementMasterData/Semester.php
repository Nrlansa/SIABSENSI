<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\SemesterController;

Route::resource('semester', SemesterController::class);