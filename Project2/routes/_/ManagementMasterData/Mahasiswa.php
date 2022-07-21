<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasterData\MahasiswaController;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Search;

Route::resource('mahasiswa', MahasiswaController::class); 