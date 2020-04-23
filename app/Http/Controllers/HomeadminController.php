<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Desa;
use App\Models\Pengolahanlimbahternak;
use Illuminate\Http\Request;

class HomeadminController extends Controller
{
    use Resource;

    protected $model = Pengolahanlimbahternak::class;
    protected $view = 'homes';
    protected $route = 'homeAdmin';

    public function __construct()
    {
        $this->middleware('can:admin');
    }

    public function index()
    {
        return view('homes.index');
    }
}
