<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_saprodi extends Model
{
    public function bidang_pertanians()
    {
        return $this->hasMany(Bidang_pertanian::class);
    }
    public function kepemilikansaprodis()
    {
        return $this->hasMany(Kepemilikansaprodi::class);
    }
}
