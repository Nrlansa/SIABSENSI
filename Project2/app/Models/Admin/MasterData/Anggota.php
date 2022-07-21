<?php

namespace App\Models\Admin\MasterData;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Model;

class Anggota extends Model
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    
        
    }
    protected $table = 'admin_anggota';

    protected $fillable =['id_mahasiswa'];

    function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    function kelas(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

   

    // function Mahasiswa(){
	// 	return $this->belongsTo('\App\Models\Admin\MasterData\Mahasiswa', 'id_mahasiswa');
	// }

    // function Kelas(){
	// 	return $this->belongsTo('\App\Models\Admin\MasterData\Kelas', 'id_kelas');
	// }
}
