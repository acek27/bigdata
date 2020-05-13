<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bidang_peternakan extends Model
{
    use GetAttributes;

    protected $with = ['desa', 'md_penyakitternaks'];
    protected $fillable = ['nik', 'statuspengelolaan', 'kepemilikankandang', 'peruntukanternak',
        'sumberpakanternak', 'namasuplier', 'iddesasuplier', 'statusterserangpenyakit', 'idpenyakitternak',
        'pemasaranhasilproduksi', 'pemasarandalamkabupaten', 'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri',
        'pengolahanlimbah', 'kapasitaslimbahperbulan', 'hargasebelumolah', 'hargasetelaholah', 'user_id'];
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
        'hargasetelaholah' => null,
    ];

    public function getStatuspengelolaanAttribute($value)
    {
        if ($value == 1) {
            return "Dikelola sendiri";
        } elseif ($value == 2) {
            return "Dikelola orang lain";
        } elseif ($value == 3) {
            return "Dikelola secara Komunal (Tempat penitipan ternak)";
        }
    }

    public function getKepemilikankandangAttribute($value)
    {
        if ($value == 1) {
            return "Pemilik ternak";
        } elseif ($value == 2) {
            return "Pengelola ternak";
        } elseif ($value == 3) {
            return "Kandang komunal";
        } elseif ($value == null) {
            return "-";
        }
    }

    public function getPeruntukanternakAttribute($value)
    {
        if ($value == 1) {
            return "Pembibitan";
        } elseif ($value == 2) {
            return "Pembudidaya";
        } elseif ($value == 3) {
            return "Penggemukan";
        } elseif ($value == 4) {
            return "Dianakkan";
        } elseif ($value == 5) {
            return "Dujual hidup";
        }
    }

    public function getSumberpakanternakAttribute($value)
    {
        if ($value == 1) {
            return "Mempunyai hijauan pakan ternak (HPT) sendiri";
        } elseif ($value == 2) {
            return "Mencari";
        } elseif ($value == 3) {
            return "Membuat sendiri (silase)";
        } elseif ($value == 4) {
            return "Membeli";
        }
    }

    public function getStatusterserangpenyakitAttribute($value)
    {
        if ($value == 1) {
            return "Tidak pernah";
        } elseif ($value == 2) {
            return "Penyakit individu";
        } elseif ($value == 3) {
            return "Penyakit menular";
        }
    }

    public function getPemasaranhasilproduksiAttribute($value)
    {
        if ($value == 1) {
            return "Pedagang";
        } elseif ($value == 2) {
            return "Pasar";
        }
    }

    public function getPengolahanlimbahAttribute($value)
    {
        if ($value == 1) {
            return "Dibuang";
        } elseif ($value == 2) {
            return "Diolah sendiri";
        } elseif ($value == 3) {
            return "Dijual";
        }
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class, 'iddesasuplier', 'iddesa');
    }

    public function md_penyakitternaks()
    {
        return $this->belongsTo(Md_penyakitternak::class, 'idpenyakitternak', 'id');
    }

}
