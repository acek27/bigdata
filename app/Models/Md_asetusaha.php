<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_asetusaha extends Model
{
    public function kepemilikanasets()
    {
        return $this->hasMany(Kepemilikanaset::class);
    }
}
