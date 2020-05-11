<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Budidayaikan extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisikanbudidayas', 'md_jenispakanikans','satuanluass','satuanbibits','satuanjuals','satuanpakans'];
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
    public function satuanluass()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanluas', 'id');
    }
    public function satuanbibits()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanbibit', 'id');
    }
    public function satuanpakans()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanpakan', 'id');
    }
    public function satuanjuals()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanjual', 'id');
    }
}
