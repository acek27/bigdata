<?php

namespace App\Http\Traits;

trait GetAttributes
{
    public function scopeGetYear($query)
    {
        return $query->whereYear('created_at', date('Y'));
    }
}
