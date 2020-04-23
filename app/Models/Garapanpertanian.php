<?php

namespace App\Models;

use App\Http\Traits\GetYear;
use Illuminate\Database\Eloquent\Model;

class Garapanpertanian extends Model
{
    use GetYear;

    protected $with = ['md_jenistanamans'];
    protected $fillable = ['nik', 'jenistanaman', 'luastanam', 'satuanluas', 'bulantanam', 'bulantanamselanjutnya',
        'kebutuhanbibit', 'hargabibit', 'kapasitaspanen', 'panenpertahun', 'operasionaltanam'];

    public function md_jenistanamans()
    {
        return $this->belongsTo(Md_jenistanaman::class, 'idjenistanaman', 'id');
    }
}
