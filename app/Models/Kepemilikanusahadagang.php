<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Kepemilikanusahadagang extends Model
{
    use GetYear;

    protected $with = ['md_jenisusahadagangs'];
    protected $fillable = ['nik', 'idjenisusahadagang'];

    public function bidang_perdagangans()
    {
        return $this->hasMany(Bidang_jasa::class);
    }

    public function md_jenisusahadagangs()
    {
        return $this->belongsTo(Md_jenisusahadagang::class, 'idjenisusahadagang', 'id');
    }

}
