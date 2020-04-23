<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_bidangusahapekerjaan extends Model
{
    public function pekerjaantambahans()
    {
        return $this->hasMany(Pekerjaantambahan::class);
    }
}
