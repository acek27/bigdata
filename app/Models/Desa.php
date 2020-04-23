<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $primaryKey = 'iddesa';

    public function bidang_pertanians()
    {
        return $this->hasMany(Bidang_pertanian::class);
    }

    public function bidang_peternakans()
    {
        return $this->hasMany(Bidang_peternakan::class);
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'idkecamatan', 'idkecamatan');
    }
}
