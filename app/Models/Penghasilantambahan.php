<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\GetAttributes;

class Penghasilantambahan extends Model
{
    use GetAttributes;

    protected $fillable = ['nik', 'namasumberdaya', 'panenpertahun', 'hasilperpanen'];

}
