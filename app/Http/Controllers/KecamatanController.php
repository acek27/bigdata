<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\Resource;

class KecamatanController extends Controller
{
    use Resource;
//    protected $model = Aspek::class;
    protected $view = 'homes';
    protected $route = 'kecamatan';

    public function __construct()
    {
        $this->middleware('can:admin');
    }
}
