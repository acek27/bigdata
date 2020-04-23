<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penggunaanpakanternak extends Model
{
    protected $with = ['md_jenispakanternaks'];

    public function md_jenispakanternaks()
    {
        return $this->belongsTo(Md_jenispakanternak::class, 'idjenispakanternak', 'id');
    }
}
