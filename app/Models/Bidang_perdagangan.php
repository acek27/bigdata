<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_perdagangan extends Model
{
    use GetAttributes;

    protected $with = ['md_supliers', 'md_satuankulaks', 'md_satuanjuals', 'md_jenisusahadagangs'];
    protected $fillable = ['nik', 'idjenisusahadagang', 'produkunggulan', 'jumlahkulakperbulan', 'satuankulak',
        'hargakulak', 'hargajual', 'satuanjual', 'idsuplier', 'namasuplier'];


    public function md_jenisusahadagangs()
    {
        return $this->belongsTo(Md_jenisusahadagang::class, 'idjenisusahadagang', 'id');
    }

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }

    public function md_satuankulaks()
    {
        return $this->belongsTo(Md_satuan::class, 'satuankulak', 'id');
    }

    public function md_satuanjuals()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanjual', 'id');
    }
}
