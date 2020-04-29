<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Fasilitasperbankan extends Model
{
    use GetAttributes;

    protected $with = ['md_perbankans'];
    protected $fillable = ['nik', 'idjenisperbankan', 'namabank', 'cabang'];

    public function md_perbankans()
    {
        return $this->belongsTo(Md_perbankan::class, 'idjenisperbankan', 'id');
    }
}
