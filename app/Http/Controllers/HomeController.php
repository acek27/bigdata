<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Bidang_industri;
use App\Models\Kecamatan;
use App\Models\Md_suplier;
use Shapefile\ShapefileException;
use Shapefile\ShapefileReader;

class HomeController extends Controller
{
    use Resource;

    protected $model = Kecamatan::class;
    protected $view = 'homes';
    protected $route = 'home';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (\Auth::user()->can('admin')) {
            $model = Md_suplier::all();
            return view('homes.index',compact('model'));
        } else if (\Auth::user()->can('pencacah')) {
            return redirect()->route('kuesioner.index');
        }
    }

    public function map()
    {
        try {
            // Open Shapefile
            $Shapefile = new ShapefileReader('gis/Toponimi/Administrasi_Point.shp');

            // Read all the records
            while ($Geometry = $Shapefile->fetchRecord()) {
                // Skip the record if marked as "deleted"
                if ($Geometry->isDeleted()) {
                    continue;
                }

                // Print Geometry as an Array
//                $data = ($Geometry->getArray());

                // Print Geometry as WKT
//                $data = ($Geometry->getWKT());

                // Print Geometry as GeoJSON
                $data = ($Geometry->getGeoJSON());

                // Print DBF data
//                $data = ($Geometry->getDataArray());
                return $data;
//                return view('home',compact('data'));
            }

        } catch (ShapefileException $e) {
            // Print detailed error information
            echo "Error Type: " . $e->getErrorType()
                . "\nMessage: " . $e->getMessage()
                . "\nDetails: " . $e->getDetails();
        }
    }
}
