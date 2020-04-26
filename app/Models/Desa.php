<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    protected $table = 'desa';
    protected $primaryKey = 'iddesa';
    protected $with = ['kecamatan'];
    protected $keyType = 'string';
//    protected $appends =['namadesa'];

    public function getNamadesaAttribute($value)
    {
        return ucwords(strtolower($value));
    }

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
