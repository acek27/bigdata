<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Garapanpertanian extends Model
{
    use GetAttributes;

    protected $with = ['md_jenistanamans','md_satuanbibits','md_satuanluass'];
    protected $fillable = ['nik', 'jenistanaman', 'luastanam', 'satuanluas', 'bulantanam', 'bulantanamselanjutnya',
        'kebutuhanbibit', 'hargabibit', 'kapasitaspanen', 'panenpertahun', 'operasionaltanam'];


    public function md_jenistanamans()
    {
        return $this->belongsTo(Md_jenistanaman::class, 'idjenistanaman', 'id');
    }
    public function md_satuanluass()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanluas', 'id');
    }
    public function md_satuanbibits()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanbibit', 'id');
    }
}
