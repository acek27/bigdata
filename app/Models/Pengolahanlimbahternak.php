<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Pengolahanlimbahternak extends Model
{
    use GetYear;

    protected $with = ['md_limbahternaks'];
    protected $fillable = ['nik', 'idlimbahternak', 'kapasitasperbulan', 'satuanlimbah', 'hargajual'];

    public function md_limbahternaks()
    {
        return $this->belongsTo(Md_limbahternak::class, 'idlimbahternak', 'id');
    }
}
