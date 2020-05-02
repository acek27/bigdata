<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_perdagangan extends Model
{
    use GetAttributes;

    protected $with = ['kepemilikanusahadagangs', 'md_supliers'];
    protected $fillable = ['idkepemilikandagang', 'produkunggulan', 'jumlahkulakperbulan', 'satuankulak',
        'hargakulak', 'hargajual', 'satuanjual', 'idsuplier', 'pemasarandalamkecamatan', 'pemasarandalamkabupaten',
        'pemasaranluarprovinsi', 'pemasaranluarnegeri'];

    public function kepemilikanusahadagangs() //ganti
    {
        return $this->belongsTo(Kepemilikanusahadagang::class, 'idkepemilikandagang', 'id');
    }

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
