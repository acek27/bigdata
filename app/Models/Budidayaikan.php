<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budidayaikan extends Model
{
    protected $with = ['md_jenisbudidayas','md_jenispakanternaks'];

    public function md_jenisikanbudidayas()
    {
        return $this->belongsTo(Md_jenisikanbudidaya::class, 'idjenisikan', 'id');
    }
    public function md_jenispakanternaks()
    {
        return $this->belongsTo(Md_jenispakanternak::class, 'idjenispakan', 'id');
    }
}
