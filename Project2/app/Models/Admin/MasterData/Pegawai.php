<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\Admin\MasterData\Role;


class Pegawai extends ModelAuthenticate
{
    protected $table = 'admin_pegawai';

    protected $fillable =['nama', 'nip', 'nik', 'email', 'jabatan'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }
}
