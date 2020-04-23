<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Bidang_jasa extends Model
{
    use GetYear;

    protected $fillable = ['jenisjasa', 'konsumenperminggu', 'brutoperbulan', 'pemasarandalamkabupaten',
        'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri'];
}
