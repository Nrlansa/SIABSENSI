<?php

use App\Models\Mahasiswa;
use App\Imports\EmployeeImport;
use App\Imports\MahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\BaseMahasiswaController;
use App\Http\Controllers\Admin\MasterData\AbsensiController;
use App\Http\Controllers\Admin\MasterData\AnggotaController;
use App\Http\Controllers\Admin\MasterData\MahasiswaController;
use App\Http\Controllers\LaporanSemesterController;
use App\Http\Controllers\MinipcController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('auth.login');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/absensi', function () {
    return view('admin.absensi.absensi');
});

Route::get('admin/laporan', function () {
    return view('admin.laporan.laporan');
});

Route::get('dosen/dashboard', function () {
    return view('dosen.dashboard');
});
// Route::get('dosen/absensi', function(){
//     return view('dosen.absensi.absensi');
// });

Route::get('mahasiswa/dashboard', function () {
    return view('mahasiswa.dashboard');
});
// Route::get('mahasiswa/QrCodeGen', function(){
// return view('mahasiswa.QrCodeGen');
// });

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('check-role', [AuthController::class, 'checkRole']);

Route::prefix('admin')->middleware('auth')->group(function () {
    include "_/admin.php";
});

Route::prefix('dosen')->middleware('auth')->group(function () {
    include "_/dosen.php";
});

Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function () {
    include "_/mahasiswa.php";
});

Route::get('mahasiswa/profile', [BaseMahasiswaController::class, 'profile']);
Route::get('mahasiswa/edit-profil/{mahasiswa}', [BaseMahasiswaController::class, 'edit']);
Route::put('update-profil/{mahasiswa}', [BaseMahasiswaController::class, 'update']);

Route::get('admin/absensi/absensi-data', [AbsensiController::class, 'index']);
Route::get('lihat-absensi/{kela}', [AbsensiController::class, 'detail']);

Route::post('store-anggota', [AnggotaController::class, 'store']);
Route::post('store-kelas', [AnggotaController::class, 'storeKelas']);
Route::get('delete-anggota/{anggota}', [AnggotaController::class, 'destroy']);

Route::post('store-izin', [IzinController::class, 'store']);

Route::put('update-anggota\{anggota}', [AnggotaController::class, 'update']);

Route::post('/mahasiswa/import', MahasiswaController::class, 'import')->name('mahasiswa/import');


Route::get('mahasiswa/QrCodeGen', QRController::class);
Route::get('/cari', [MahasiswaController::class, 'cari']);


//ruangan
Route::get('multimedia', [MinipcController::class, 'multimedia']);
Route::post('store-multimedia', [MinipcController::class, 'store']);

Route::get('rpl', [MinipcController::class, 'Rpl']);
Route::post('store-Rpl', [MinipcController::class, 'store']);

Route::get('pbl1', [MinipcController::class, 'Pbl1']);
Route::post('store-pbl1', [MinipcController::class, 'store']);


Route::get('pbl2', [MinipcController::class, 'Pbl2']);
Route::post('store-pbl1', [MinipcController::class, 'store']);


Route::get('program', [MinipcController::class, 'program']);
Route::post('store-program', [MinipcController::class, 'store']);



Route::get('laporan-semester', [LaporanSemesterController::class, 'index']);
Route::post('laporan-semester', [LaporanSemesterController::class, 'store']);

Route::get('phpinfo', function () {
    echo phpinfo();
});