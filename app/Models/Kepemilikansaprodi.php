<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Kepemilikansaprodi extends Model
{

    use GetAttributes;
    
    protected $fillable = ['nik', 'idjenissaprodi'];
    protected $with = ['md_saprodis'];

    public function md_saprodis()
    {
        return $this->belongsTo(Md_saprodi::class, 'idjenissaprodi', 'id');
    }
}
