<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenisusahadagang extends Model
{
    public function bidang_perdagangans()
    {
        return $this->hasMany(Bidang_perdagangan::class);
    }
}
