<?php

namespace App\Models;


class Absensi extends Model
{
    protected $table = 'admin_absensi';

    public function scopeSearch($query, $id_ruangan)
    {
        return $query->where('id_ruangan', 'LIKE', "%{$id_ruangan}%");
    }
}