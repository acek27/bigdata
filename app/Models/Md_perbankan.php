<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Md_perbankan extends Model
{
    public function fasilitasperbankans()
    {
        return $this->hasMany(Fasilitasperbankan::class);
    }
}
