<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait GetAttributes
{

    public function scopeAnyData($query)
    {
        return $query->whereYear('created_at', date('Y'));
    }

    public function scopePersonalData($query, $nik)
    {
        return $query->whereYear('created_at', date('Y'))
            ->where('nik', $nik);
    }

    public function getPemasarandalamkabupatenAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getPemasaranluarkabupatenAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getPemasaranluarprovinsiAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getPemasaranluarnegeriAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getKonsumendalamkabupatenAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getKonsumenluarkabupatenAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getKonsumenluarprovinsiAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getKonsumenluarnegeriAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function getKonsumendalamkecamatanAttribute($value)
    {
        if ($value == 1) {
            return "Ya";
        } elseif ($value == 0) {
            return "Tidak";
        }
    }

    public function status()
    {
        $data = ($this->whereYear('created_at', date('Y'))->count());
        return $data;
    }
}
