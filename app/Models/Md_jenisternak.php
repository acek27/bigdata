<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenisternak extends Model
{
    public function pengelolaanternaks()
    {
        return $this->hasMany(Pengelolaanternak::class);
    }
}
