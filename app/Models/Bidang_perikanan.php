<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_perikanan extends Model
{
    use GetAttributes;

    protected $with = ['md_supliers'];
    protected $fillable = ['nik', 'perolehanpakan', 'idsuplier', 'olahanlanjutan', 'namaolahan',
        'produksiperbulan', 'satuanproduksi', 'hargajual', 'pemasarandalamkabupaten',
        'pemasaranluarprovinsi', 'pemasaranluarnegeri'];

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
