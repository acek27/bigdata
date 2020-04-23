<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_penyakitternak extends Model
{
    public function bidang_peternakans()
    {
        return $this->hasMany(Bidang_peternakan::class);
    }
}
