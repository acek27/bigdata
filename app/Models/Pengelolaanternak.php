<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pengelolaanternak extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisternaks','md_satuanhasils'];
    protected $fillable = ['nik', 'idjenisternak', 'statuskepemilikan', 'jumlahternak', 'hargabibitternak',
        'hargajualternak', 'hargajualhasilpeternakan', 'satuanhasilpeternakan', 'kapasitasproduksipertahun',
        'kapasitasproduksiperperiode', 'periodepertahun', 'operasionalproduksi'];

    public function getStatuskepemilikanAttribute($value)
    {
        if ($value == 1) {
            return "Milik sendiri";
        } elseif ($value == 2) {
            return "Menggaduh";
        } elseif ($value == 3) {
            return "Campuran";
        }
    }

    public function md_jenisternaks()
    {
        return $this->belongsTo(Md_jenisternak::class, 'idjenisternak', 'id');
    }
    public function md_satuanhasils()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanhasilpeternakan', 'id');
    }
}
