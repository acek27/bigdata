<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaantambahan extends Model
{
    protected $with = ['md_bidangusahapekerjaans', 'md_statuspekerjaans'];

    public function md_bidangusahapekerjaans()
    {
        return $this->belongsTo(Md_bidangusahapekerjaan::class, 'idjenisusaha', 'id');
    }

    public function md_statuspekerjaans()
    {
        return $this->belongsTo(Md_statuspekerjaan::class, 'idstatuspekerjaan', 'id');
    }
}
