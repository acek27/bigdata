<?php

namespace App\Models;

use App\Http\Traits\GetAttributes;
use Illuminate\Database\Eloquent\Model;

class Pdrbdankredit extends Model
{
    use GetAttributes;

    protected $with = ['md_besaranperbankans'];
    protected $fillable = ['nik', 'iddtdakp', 'pendapatanperbulan', 'idbesarankredit', 'lamakredit'];

    public function getPendapatan()
    {
        return ($this->pendapatanperbulan > $this->getRataPdrb()) ? 'Diatas Rata-rata' : 'Dibawah Rata-rata';
    }

    public function getRataPdrb()
    {
        $total = 0;
        $data = Pdrbdankredit::all();
        foreach ($data as $datum) {
            $total += $datum->pendapatanperbulan;
        }
        return $total / $data->count();
    }

    public function md_besaranperbankans()
    {
        return $this->belongsTo(Md_besaranperbankan::class, 'idbesarankredit', 'id');
    }
}
