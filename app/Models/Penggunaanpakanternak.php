<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Penggunaanpakanternak extends Model
{
    use GetYear;

    protected $with = ['md_jenispakanternaks'];
    protected $fillable = ['nik', 'idjenispakanternak', 'kebutuhanperhari', 'satuanpakan', 'hargapakan'];

    public function md_jenispakanternaks()
    {
        return $this->belongsTo(Md_jenispakanternak::class, 'idjenispakanternak', 'id');
    }
}
