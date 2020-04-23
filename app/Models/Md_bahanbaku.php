<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_bahanbaku extends Model
{
    public function bidang_industris()
    {
        return $this->hasMany(Bidang_industri::class);
    }
}
