<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_suplier extends Model
{
    public function bidang_industris()
    {
        return $this->hasMany(Bidang_industri::class);
    }

    public function bidang_perdagangans()
    {
        return $this->hasMany(Bidang_perdagangan::class);
    }

    public function bidang_perikanans()
    {
        return $this->hasMany(Bidang_perikanan::class);
    }
}
