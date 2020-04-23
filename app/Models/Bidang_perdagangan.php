<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_perdagangan extends Model
{
    protected $with = ['kepemilikanusahadagangs','md_supliers'];

    public function kepemilikanusahadagangs()
    {
        return $this->belongsTo(Kepemilikanusahadagang::class, 'idkepemilikandagang', 'id');
    }
    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
