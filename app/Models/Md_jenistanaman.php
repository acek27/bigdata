<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_jenistanaman extends Model
{
    protected $table = 'md_jenistanamans';

    public function garapanpertanians()
    {
        return $this->hasMany(Garapanpertanian::class);
    }
}
