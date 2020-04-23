<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_peternakan extends Model
{
    protected $with = ['desa', 'md_penyakitternaks'];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'iddesasuplier', 'iddesa');
    }
    public function md_penyakitternaks()
    {
        return $this->belongsTo(Md_penyakitternak::class, 'idpenyakitternak', 'id');
    }
}
