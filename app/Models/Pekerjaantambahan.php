<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pekerjaantambahan extends Model
{
    use GetAttributes;

    protected $with = ['md_bidangusahapekerjaans', 'md_statuspekerjaans'];
    protected $fillable = ['nik', 'idjenisusaha', 'idstatuspekerjaan'];

    public function md_bidangusahapekerjaans()
    {
        return $this->belongsTo(Md_bidangusahapekerjaan::class, 'idjenisusaha', 'id');
    }

    public function md_statuspekerjaans()
    {
        return $this->belongsTo(Md_statuspekerjaan::class, 'idstatuspekerjaan', 'id');
    }
}
