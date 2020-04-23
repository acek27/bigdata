<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kepemilikanaset extends Model
{
    protected $with = ['md_asetusahas'];
    protected $fillable = ['nik', 'idasetusaha', 'jumlahaset'];

    public function md_asetusahas()
    {
        return $this->belongsTo(Md_asetusaha::class, 'idasetusaha', 'id');
    }
}
