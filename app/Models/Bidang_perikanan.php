<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_perikanan extends Model
{
    protected $with = ['md_supliers'];

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
