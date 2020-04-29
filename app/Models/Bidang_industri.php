<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_industri extends Model
{
    use GetAttributes;

    protected $with = ['md_bahanbakus', 'md_suplier'];
    protected $fillable = ['nik', 'idjenisindustri', 'jenisindustri', 'namaproduk', 'produksiperbulan',
        'satuanproduksi', 'idbahanbaku', 'kebutuhanperbulan', 'satuanbahanbaku', 'hargakulakbahan', 'satuankulak',
        'namasuplier', 'idsuplier', 'pemasarandalamkabupaten', 'pemasaranluarkabupaten', 'pemasaranluarprovinsi',
        'pemasaranluarnegeri', 'tempatpemasaran', 'hargajualproduk', 'satuanjual', 'operasionalperbulan'];

    public static $rulesCreate = [
        'nik' => 'required',
        'idjenisindustri' => 'required',
        'namaproduk' => 'required',
        'produksiperbulan' => 'required',
        'satuanproduksi' => 'required',
        'idbahanbaku' => 'required',
        'kebutuhanperbulan' => 'required',
        'satuanbahanbaku' => 'required',
        'hargakulakbahan' => 'required',
        'satuankulak' => 'required',
        // 'namasuplier' => 'required',
        'idsuplier' => 'required',
        // 'pemasarandalamkabupaten' => 'required',
        // 'pemasaranluarkabupaten' => 'required',
        // 'pemasaranluarprovinsi' => 'required',
        // 'pemasaranluarnegeri' => 'required',
        // 'tempatpemasaran' => 'required',
        'hargajualproduk' => 'required',
        'operasionalperbulan' => 'required',
    ];

    public static function rulesEdit(Bidang_industri $data)
    {
        return ['nik' => 'required',
            'idjenisindustri' => 'required',
            'namaproduk' => 'required',
            'produksiperbulan' => 'required',
            'satuanproduksi' => 'required',
            'idbahanbaku' => 'required',
            'kebutuhanperbulan' => 'required',
            'satuanbahanbaku' => 'required',
            'hargakulakbahan' => 'required',
            'namasuplier' => 'required',
            'idsuplier' => 'required',
            'pemasarandalamkabupaten' => 'required',
            'pemasaranluarkabupaten' => 'required',
            'pemasaranluarprovinsi' => 'required',
            'pemasaranluarnegeri' => 'required',
            'tempatpemasaran' => 'required',
            'hargajualproduk' => 'required',
            'operasionalperbulan' => 'required',
        ];
    }

    public function scopeTahun($query)
    {
        return $query->whereYear('created_at', '2018');
    }

    public function md_bahanbakus()
    {
        return $this->belongsTo(Md_bahanbaku::class, 'idbahanbaku', 'id');
    }

    public function md_supliers()
    {
        return $this->belongsTo(Md_suplier::class, 'idsuplier', 'id');
    }
}
