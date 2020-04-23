<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pengolahanlimbahternak extends Model
{
    use GetAttributes;

    protected $with = ['md_limbahternaks'];
    protected $fillable = ['nik', 'idlimbahternak', 'kapasitasperbulan', 'satuanlimbah', 'hargajual'];

    public function md_limbahternaks()
    {
        return $this->belongsTo(Md_limbahternak::class, 'idlimbahternak', 'id');
    }
}
