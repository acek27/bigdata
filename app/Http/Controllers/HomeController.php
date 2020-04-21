<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Kecamatan;
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
        $this->middleware('can:opd');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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
