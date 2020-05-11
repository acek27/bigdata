<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_perikanan extends Model
{
    use GetAttributes;

    protected $with = ['md_supliers','md_satuanproduksis','md_satuanjuals'];
    protected $fillable = ['nik', 'perolehanpakan', 'idsuplier', 'olahanlanjutan', 'namaolahan',
        'produksiperbulan', 'satuanproduksi', 'hargajual', 'pemasarandalamkabupaten',
        'pemasaranluarprovinsi', 'pemasaranluarnegeri'];

    public function getPerolehanpakanAttribute($value)
    {
        if ($value == 1) {
            return "Membuat sendiri";
        } elseif ($value == 2) {
            return "Membeli";
        }
    }

    public function getOlahanlanjutanAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 2) {
            return "Tidak (Langsung dijual)";
        }
    }

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
    public function md_satuanjuals()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanjual', 'id');
    }
    public function md_satuanproduksis()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanproduksi', 'id');
    }

}
