<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_industri extends Model
{
    protected $with = ['md_bahanbakus','md_suplier'];

    public function md_bahanbakus()
    {
        return $this->belongsTo(Md_bahanbaku::class, 'idbahanbaku', 'id');
    }
    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
