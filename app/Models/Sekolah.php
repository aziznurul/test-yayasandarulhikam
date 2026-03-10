<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $fillable = [
        'yayasan_id',
        'nama_sekolah',
        'jenjang',
        'alamat',
        'telepon'
    ];

    public function yayasan()
    {
        return $this->belongsTo(Yayasan::class);
    }
}