<?php

namespace App\Models\Admin\MasterData;

use App\Models\Model;
use App\Models\Admin\MasterData\Module;
use App\Models\Admin\MasterData\Pegawai;

class Role extends Model
{
    protected $table = 'admin_role';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
