<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Masterdata\MatakuliahController;



Route::resource('matakuliah', MatakuliahController::class); 
