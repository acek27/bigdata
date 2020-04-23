<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenispakanternak extends Model
{
    public function budidayaikans()
    {
        return $this->hasMany(Budidayaikan::class);
    }
    public function penggunaanpakanternaks()
    {
        return $this->hasMany(Penggunaanpakanternak::class);
    }
}
