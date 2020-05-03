<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_pertanian extends Model
{
    use GetAttributes;

    protected $with = ['desasuplier', 'desakios', 'md_saprodis'];
    protected $fillable = ['nik', 'statuspengelolaan', 'statuspembibitan', 'namasuplier',
        'iddesasuplier', 'kebutuhanpupukorganik', 'kebutuhanpupukanorganik', 'sumberpupuk', 'namakios',
        'iddesakios', 'sumberirigasi', 'modelpenjualan', 'hargaijon', 'satuanijon', 'pemasaranhasil',
        'pemasarandalamkabupaten', 'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri',
        'pengolahanlimbah', 'jenisolahanlimbah', 'kapasitaslimbahperpanen', 'satuanlimbah',
        'hargasebelumolah', 'idsaprodi'];

    public function getStatuspengelolaanAttribute($value)
    {
        if ($value == 1) {
            return "Dikelola sendiri (dengan/tanpa pekerja)";
        } elseif ($value == 2) {
            return "Dikelola orang lain (sistem kerjasama/bagi hasil/disewakan,dsb)";
        }
    }

    public function getStatuspembibitanAttribute($value)
    {
        if ($value == 1) {
            return "Membuat sendiri (menyemai)";
        } elseif ($value == 2) {
            return "Membeli";
        }
    }

    public function getsumberpupukAttribute($value)
    {
        if ($value == 1) {
            return "Membeli";
        } elseif ($value == 2) {
            return "Membuat sendiri";
        }
    }

    public function getsumberirigasiAttribute($value)
    {
        if ($value == 1) {
            return "Sumur Bor";
        } elseif ($value == 2) {
            return "Irigasi Pertanian";
        } elseif ($value == 3) {
            return "Sumberan";
        }
    }

    public function getModelpenjualanAttribute($value)
    {
        if ($value == 1) {
            return "Diijonkan (sebelum panen)";
        } elseif ($value == 2) {
            return "Diolah menjadi bahan baku setengah jadi";
        } elseif ($value == 3) {
            return "Diolah menjadi barang siap konsumsi";
        } elseif ($value == 4) {
            return "Dijual ketengkulak (saat panen)";
        }
    }

    public function getPemasaranhasilAttribute($value)
    {
        if ($value == 1) {
            return "Pengijon dalam kabupaten";
        } elseif ($value == 2) {
            return "Pengijon luar kabupaten";
        } elseif ($value == 3) {
            return "Tengkulak dalam kabupaten";
        } elseif ($value == 4) {
            return "Tengkulak luar kabupaten";
        } elseif ($value == 5) {
            return "Toko/Pedagang/Pasar dalam kabupaten";
        } elseif ($value == 6) {
            return "Toko/Pedagang/Pasar luar kabupaten";
        } elseif ($value == 7) {
            return "Industri";
        }
    }

    public function getPengolahanlimbahAttribute($value)
    {
        if ($value == 1) {
            return "Dibuang/dibakar";
        } elseif ($value == 2) {
            return "Diolah";
        } elseif ($value == 3) {
            return "Dijual";
        }
    }

    public function desasuplier()
    {
        return $this->belongsTo(Desa::class, 'iddesasuplier', 'iddesa');
    }

    public function desakios()
    {
        return $this->belongsTo(Desa::class, 'iddesakios', 'iddesa');
    }

    public function md_saprodis()
    {
        return $this->belongsTo(Md_saprodi::class, 'idsaprodi', 'id');
    }
}
