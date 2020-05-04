<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Kepemilikanusahadagang extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisusahadagangs'];
    protected $fillable = ['nik', 'idjenisusahadagang', 'jenisusahadagang', 'konsumendalamkecamatan',
        'konsumendalamkabupaten', 'konsumenluarkabupaten', 'konsumenluarprovinsi'];
    protected $attributes = [
        'konsumendalamkecamatan' => 0,
        'konsumendalamkabupaten' => 0,
        'konsumenluarkabupaten' => 0,
        'konsumenluarprovinsi' => 0
    ];

    public function bidang_perdagangans()
    {
        return $this->hasMany(Bidang_jasa::class);
    }

    public function md_jenisusahadagangs()
    {
        return $this->belongsTo(Md_jenisusahadagang::class, 'idjenisusahadagang', 'id');
    }

}
