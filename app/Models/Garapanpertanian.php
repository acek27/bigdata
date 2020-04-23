<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Garapanpertanian extends Model
{
    protected $with = ['md_jenistanamans'];

    public function md_jenistanamans()
    {
        return $this->belongsTo(Md_jenistanaman::class, 'idjenistanaman', 'id');
    }
}
