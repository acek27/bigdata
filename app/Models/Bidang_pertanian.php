<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_pertanian extends Model
{
    protected $with = ['desasuplier', 'desakios', 'md_saprodis'];
    protected $fillable = ['nik','statuspengelolaan','statuspembibitan','namasuplier',
        'iddesasuplier','kebutuhanpupukorganik','kebutuhanpupukanorganik','sumberpupuk','namakios',
        'iddesakios','sumberirigasi','modelpenjualan','hargaijon','satuanijon','pemasaranhasil',
        'pemasarandalamkabupaten','pemasaranluarkabupaten','pemasaranluarprovinsi','pemasaranluarnegeri',
        'pengolahanlimbah','jenisolahanlimbah','kapasitaslimbahperpanen','satuanlimbah',
        'hargasebelumolah','idsaprodi'];

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
