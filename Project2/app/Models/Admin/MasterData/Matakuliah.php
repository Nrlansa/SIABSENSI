<?php

namespace App\Models\Admin\Masterdata;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
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
    
    protected $table = 'admin_matakuliah';

    protected $fillable =['kode_makul','nama_makul'];

}
