<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pengolahanlimbahternak extends Model
{
    use GetAttributes;

    protected $with = ['md_limbahternaks'];
    protected $fillable = ['nik', 'idlimbahternak','jenislimbahternak', 'kapasitasperbulan', 'satuanlimbah', 'hargajual'];

    public function md_limbahternaks()
    {
        return $this->belongsTo(Md_limbahternak::class, 'idlimbahternak', 'id');
    }
    public function md_satuanlimbahs()
    {
        return $this->belongsTo(Md_satuan::class, 'satuanlimbah', 'id');
    }
}
