<?php

namespace App\Models\Admin\MasterData;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Model;

class Kelas extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    
        
    }
    protected $table = 'admin_kelas';

    protected $fillable =['nama', 'id_semester','angkatan'];


    function Semester(){
		return $this->belongsTo('\App\Models\Admin\MasterData\Semester', 'id_semester');
	}

    // function Anggota(){
	// 	return $this->belongsTo('\App\Models\Admin\MasterData\Anggota', 'id');
	// }

   
    function anggota(){
        return $this->hasMany(Anggota::class, 'id_kelas');
    }

    
}
