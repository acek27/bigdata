<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_limbahternak extends Model
{
    public function bidang_perdagangans()
    {
        return $this->hasMany(Pengolahanlimbahternak::class);
    }

}
