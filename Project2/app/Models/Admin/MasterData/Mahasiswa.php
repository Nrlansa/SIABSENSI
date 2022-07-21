<?php

namespace App\Models\Admin\MasterData;

use App\Models\Izin;
use App\Models\Model;
use App\Models\ModelAuthenticate;
use Illuminate\Support\Str;

class Mahasiswa extends ModelAuthenticate
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    protected $table = 'admin_mahasiswa';

    protected $fillable = ['nim', 'nama', 'tahun_angkatan', 'password'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function anggota()
    {
        return $this->hasMany(Anggota::class, 'id');
    }

    function izin()
    {
        return $this->belongsTo(Izin::class, 'id');
    }
}