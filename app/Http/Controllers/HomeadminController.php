<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Kecamatan;
use App\Models\Penghasilantambahan;
use Illuminate\Http\Request;

class HomeadminController extends Controller
{
    use Resource;

    protected $model = Penghasilantambahan::class;
    protected $view = 'homes';
    protected $route = 'homeAdmin';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $model = $this->model::GetYear()->get();
        return view('homes.index', compact('model'));
    }
}
