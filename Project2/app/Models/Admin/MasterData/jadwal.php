<?php

namespace App\Models\Admin\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'admin_jadwal';

    protected $fillable =['id_makul','hari','mulai','selesai','id_kelas','semester'];

}