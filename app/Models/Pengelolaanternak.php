<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengelolaanternak extends Model
{
    protected $with = ['md_jenisternaks'];
    protected $fillable = ['nik', 'idjenisternak', 'statuskepemilikan', 'jumlahternak', 'hargabibitternak',
        'hargajualternak', 'hargajualhasilpeternakan', 'satuanhasilpeternakan', 'kapasitasproduksipertahun',
        'kapasitasproduksiperperiode', 'periodepertahun', 'operasionalproduksi'];

    public function md_jenisternaks()
    {
        return $this->belongsTo(Md_jenisternak::class, 'idjenisternak', 'id');
    }
}
