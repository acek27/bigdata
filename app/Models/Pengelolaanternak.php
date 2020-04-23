<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pengelolaanternak extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisternaks'];
    protected $fillable = ['nik', 'idjenisternak', 'statuskepemilikan', 'jumlahternak', 'hargabibitternak',
        'hargajualternak', 'hargajualhasilpeternakan', 'satuanhasilpeternakan', 'kapasitasproduksipertahun',
        'kapasitasproduksiperperiode', 'periodepertahun', 'operasionalproduksi'];

    public function md_jenisternaks()
    {
        return $this->belongsTo(Md_jenisternak::class, 'idjenisternak', 'id');
    }
}
