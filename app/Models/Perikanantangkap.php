<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Perikanantangkap extends Model
{
    use GetAttributes;

    protected $with = ['md_jenisikantangkaps'];
    protected $fillable = ['nik', 'idjenisikan', 'kapasitasperhari', 'pemasarandalamkecamatan', 'pemasarandalamkabupaten',
        'pemasaranluarkabupaten', 'pemasaranluarnegeri'];

    public function md_jenisikantangkaps()
    {
        return $this->belongsTo(Md_jenisikantangkap::class, 'idjenisikan', 'id');
    }
}
