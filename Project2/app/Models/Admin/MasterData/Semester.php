<?php

namespace App\Models\Admin\MasterData;
use Illuminate\Support\Str;
use App\Models\Model;

class Semester extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }
    protected $table = 'admin_semester';
    
    protected $fillable =['tahun_ajar', 'semester'];

    function Kelas(){
		return $this->belongsTo('\App\Models\Admin\MasterData\Kelas', 'id');
	}
}

