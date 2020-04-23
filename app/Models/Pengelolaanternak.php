<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Pengelolaanternak extends Model
{
    use GetYear;

    protected $with = ['md_jenisternaks'];
    protected $fillable = ['nik', 'idjenisternak', 'statuskepemilikan', 'jumlahternak', 'hargabibitternak',
        'hargajualternak', 'hargajualhasilpeternakan', 'satuanhasilpeternakan', 'kapasitasproduksipertahun',
        'kapasitasproduksiperperiode', 'periodepertahun', 'operasionalproduksi'];

    public function md_jenisternaks()
    {
        return $this->belongsTo(Md_jenisternak::class, 'idjenisternak', 'id');
    }
}
