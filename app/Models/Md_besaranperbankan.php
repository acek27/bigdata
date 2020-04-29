<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_besaranperbankan extends Model
{
    public function pdrbdankredits()
    {
        return $this->hasMany(Pdbrdankredit::class);
    }
}
