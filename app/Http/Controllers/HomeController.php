<?php

namespace App\Http\Controllers;

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
