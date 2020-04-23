<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perikanantangkap extends Model
{
    protected $with = ['md_jenisikantangkaps'];

    public function md_jenisikantangkaps()
    {
        return $this->belongsTo(Md_jenisikantangkap::class, 'idjenisikan', 'id');
    }
}
