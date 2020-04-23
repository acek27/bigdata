<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kepemilikanusahadagang extends Model
{
    protected $with = ['md_jenisusahadagangs'];

    public function bidang_perdagangans()
    {
        return $this->hasMany(Bidang_jasa::class);
    }

    public function md_jenisusahadagangs()
    {
        return $this->belongsTo(Md_jenisusahadagang::class, 'idjenisusahadagang', 'id');
    }
}
