<?php

namespace App\Models;

use App\Models\Admin\MasterData\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Izin extends Model
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

    protected $table = 'admin_izin';

    protected $fillable = ['id_mahasiswa', 'id_kelas', 'keterangan', 'file'];

    function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    function handleUploadFile()
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "surat";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();
        }
    }
}