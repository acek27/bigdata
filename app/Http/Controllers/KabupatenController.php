<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin');
    }
}
