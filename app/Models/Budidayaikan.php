<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Budidayaikan extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisbudidayas', 'md_jenispakanternaks'];
    protected $fillable = ['nik', 'idjenisikan', 'luaskolam', 'satuanluas', 'hargabibit', 'satuanbibit', 'hargajual',
        'satuanjual', 'tanggaltebar', 'tanggalpanen', 'kapasitasperpanen', 'panenpertahun', 'biayaproduksi',
        'idjenispakan', 'kebutuhanperhari', 'satuanhargapakan', 'hargapakan'];

    public function md_jenisikanbudidayas()
    {
        return $this->belongsTo(Md_jenisikanbudidaya::class, 'idjenisikan', 'id');
    }

    public function md_jenispakanternaks()
    {
        return $this->belongsTo(Md_jenispakanternak::class, 'idjenispakan', 'id');
    }
}
