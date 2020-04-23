<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_perikanan extends Model
{
    protected $with = ['md_supliers'];
    protected $fillable = ['nik', 'perolehanpakan', 'idsuplier', 'olahanlanjutan', 'namaolahan',
        'produksiperbulan', 'satuanproduksi', 'hargajual', 'pemasarandalamkabupaten',
        'pemasaranluarprovinsi', 'pemasaranluarnegeri'];

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
