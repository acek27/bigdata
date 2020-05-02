<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_peternakan extends Model
{
    use GetAttributes;

    protected $with = ['desa', 'md_penyakitternaks'];
    protected $fillable = ['nik', 'statuspengelolaan', 'kepemilikankandang', 'peruntukanternak',
        'sumberpakanternak', 'namasuplier', 'iddesasuplier', 'statusterserangpenyakit', 'idpenyakitternak',
        'pemasaranhasilproduksi', 'pemasarandalamkabupaten', 'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri',
        'pengolahanlimbah', 'kapasitaslimbahperbulan', 'hargasebelumolah', 'hargasetelaholah'];
    protected $attributes = [
        'pemasarandalamkabupaten' => 0,
        'pemasaranluarkabupaten' => 0,
        'pemasaranluarprovinsi' => 0,
        'pemasaranluarnegeri' => 0,
        'kepemilikankandang' => null,
        'namasuplier' => null,
        'iddesasuplier' => null,
        'idpenyakitternak' => null,
        'kapasitaslimbahperbulan' => null,
        'hargasebelumolah' => null,
        'hargasetelaholah' => null
    ];

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'iddesasuplier', 'iddesa');
    }

    public function md_penyakitternaks()
    {
        return $this->belongsTo(Md_penyakitternak::class, 'idpenyakitternak', 'id');
    }

}
