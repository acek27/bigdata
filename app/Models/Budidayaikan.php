<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Budidayaikan extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisbudidayas', 'md_jenispakanikans'];
    protected $fillable = ['nik', 'idjenisikan', 'luaskolam', 'satuanluas', 'hargabibit', 'satuanbibit', 'hargajual',
        'satuanjual', 'tanggaltebar', 'tanggalpanen', 'kapasitasperpanen', 'panenpertahun', 'biayaproduksi',
        'idjenispakan', 'kebutuhanperhari', 'satuanpakan', 'hargapakan'];

    public function md_jenisikanbudidayas()
    {
        return $this->belongsTo(Md_jenisikanbudidaya::class, 'idjenisikan', 'id');
    }

    public function md_jenispakanikans()
    {
        return $this->belongsTo(Md_jenispakanikan::class, 'idjenispakan', 'id');
    }
}
