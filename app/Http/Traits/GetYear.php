<?php

namespace App\Http\Traits;

trait GetYear
{
    public function scopeGetYear($query)
    {
        return $query->whereYear('created_at', date('Y'));
    }
}
