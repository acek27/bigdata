<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenispakanikan extends Model
{
    public function budidayaikans()
    {
        return $this->hasMany(Budidayaikan::class);
    }
}
