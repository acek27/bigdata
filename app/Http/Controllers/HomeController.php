<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shapefile\Shapefile;
use Shapefile\ShapefileException;
use Shapefile\ShapefileReader;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('can:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
