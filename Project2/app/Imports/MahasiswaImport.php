<?php

namespace App\Imports;

use App\Models\Admin\MasterData\Mahasiswa as MasterDataMahasiswa;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MasterDataMahasiswa([
            'nim'     => $row [1],
            'nama'    => $row[2],
            'jenis_kelamin' => $row[3],
            'agama' => $row[4],
            'tempat_lahir' => $row[5],
            'tanggal_lahir' => $row[6],
            'alamat' => $row[7],
            'no_hp' =>$row[8],
            'angkatan' => $row[9],
            'password' => Hash::make($row[10]),
            
        ]);
    }
}