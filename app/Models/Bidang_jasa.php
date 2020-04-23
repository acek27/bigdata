<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Bidang_jasa extends Model
{
    use GetAttributes;

    protected $fillable = ['jenisjasa', 'konsumenperminggu', 'brutoperbulan', 'pemasarandalamkabupaten',
        'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri'];
}
