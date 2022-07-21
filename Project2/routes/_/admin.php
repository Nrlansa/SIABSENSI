<?php

use Illuminate\Support\Facades\Route;



Route::redirect('/', 'admin/dashboard');
Route::prefix('master-data')->group(function(){
    include "ManagementMasterData/Mahasiswa.php";
    include "ManagementMasterData/Pegawai.php";
    include "ManagementMasterData/Matakuliah.php";
    include "ManagementMasterData/Module.php";
    include "ManagementMasterData/Ruangan.php";
    include "ManagementMasterData/Semester.php";
    include "ManagementMasterData/Kelas.php";
    include "ManagementMasterData/Anggota.php";
    include "ManagementMasterData/Absensi.php";
});