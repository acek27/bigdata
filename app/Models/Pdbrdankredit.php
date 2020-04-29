<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pdbrdankredit extends Model
{
    use GetAttributes;

    protected $fillable = ['nik', 'iddtdakp', 'pendapatanperbulan', 'idbesarankredit', 'lamakredit'];

    public function md_besaranperbankans()
    {
        return $this->belongsTo(Md_besaranperbankan::class, 'idbesarankredit', 'id');
    }

}
