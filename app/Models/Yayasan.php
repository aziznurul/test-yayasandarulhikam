<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yayasan extends Model
{
    protected $fillable = [
        'nama_yayasan',
        'alamat',
        'telepon'
    ];

    public function sekolahs()
    {
        return $this->hasMany(Sekolah::class);
    }
}
