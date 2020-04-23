<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\GetYear;

class Penghasilantambahan extends Model
{
    use GetYear;

    protected $fillable = ['nik', 'namasumberdaya', 'panenpertahun', 'hasilperpanen'];

}
