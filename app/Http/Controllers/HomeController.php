<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Bidang_industri;
use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\Md_suplier;
use App\Models\Penghasilantambahan;
use Shapefile\ShapefileException;
use Shapefile\ShapefileReader;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (\Auth::user()->can('admin')) {
            return redirect()->route('homeAdmin.index');
        } else if (\Auth::user()->can('pencacah')) {
            return redirect()->route('kuesioner.index');
        }
    }
}
