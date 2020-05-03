<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Penggunaanpakanternak extends Model
{
    use GetAttributes;

    protected $with = ['md_jenispakanternaks'];
    protected $fillable = ['nik', 'idjenispakanternak', 'namapakanternak', 'kebutuhanperhari', 'satuanpakan', 'hargapakan'];

    public function md_jenispakanternaks()
    {
        return $this->belongsTo(Md_jenispakanternak::class, 'idjenispakanternak', 'id');
    }
}
