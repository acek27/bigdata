<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'idkecamatan';
    protected $keyType = 'string';

    public function desa()
    {
        return $this->hasMany(Desa::class);
    }
}
