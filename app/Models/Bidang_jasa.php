<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bidang_jasa extends Model
{
    protected $fillable = ['jenisjasa', 'konsumenperminggu', 'brutoperbulan', 'pemasarandalamkabupaten',
        'pemasaranluarkabupaten', 'pemasaranluarprovinsi', 'pemasaranluarnegeri'];
}
