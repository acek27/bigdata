<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenisikantangkap extends Model
{
    public function bidang_perdagangans()
    {
        return $this->hasMany(Perikanantangkap::class);
    }
}
