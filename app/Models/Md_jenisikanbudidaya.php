<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenisikanbudidaya extends Model
{
    public function budidayaikans()
    {
        return $this->hasMany(Budidayaikan::class);
    }
}
