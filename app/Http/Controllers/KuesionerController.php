<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Kecamatan;
use App\Models\Md_bidangusahapekerjaan;
use App\Models\Md_statuspekerjaan;
use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    use Resource;
    protected $model = Kecamatan::class;
    protected $view = 'kuesioners';
    protected $route = 'kuesioner';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bidangusahapekerjaan = Md_bidangusahapekerjaan::all();
        $statuspekerjaan = Md_statuspekerjaan::all();
        return view($this->view.'.index',compact('bidangusahapekerjaan','statuspekerjaan'));
    }
}
