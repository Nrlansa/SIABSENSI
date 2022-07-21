<?php

namespace App\Models\Admin\MasterData;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $keyType ='string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }

    protected $table = 'admin_ruangan';

    protected $fillable =['kode_ruangan','nama_ruangan', 'kapasitas_ruangan','jenis_ruangan'];
  
}