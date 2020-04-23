<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitasperbankan extends Model
{
    protected $with = ['md_perbankans'];
    protected $fillable = ['nik', 'idjenisperbankan', 'namabank', 'cabang', 'idbesaran', 'jangkawaktu'];

    public function md_perbankans()
    {
        return $this->belongsTo(Md_perbankan::class, 'idjenisperbankan', 'id');
    }
}
