<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Kecamatan;
use App\Models\Md_bidangusahapekerjaan;
use App\Models\Md_statuspekerjaan;
use App\Models\Md_asetusaha;
use App\Models\Md_perbankan;
use App\Models\Md_besaranperbankan;
use App\Models\Md_jenisindustri;
use App\Models\Md_bahanbaku;
use App\Models\Md_suplier;
use App\Models\Md_satuan;
use App\Models\Md_jenistanaman;
use App\Models\Md_saprodi;
use App\Models\Md_jenisternak;
use App\Models\Md_jenispakanternak;
use App\Models\Md_limbahternak;
use App\Models\Md_jenisikanbudidaya;
use App\Models\Md_jenisikantangkap;
use App\Models\Md_jenispakanikan;
use App\Models\Md_jenisusahadagang;
use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $asetusaha = Md_asetusaha::all();
        $perbankan = Md_perbankan::all();
        $kredit = Md_besaranperbankan::pluck('besaran','id')->all();
        $bahanbaku = Md_bahanbaku::pluck('bahanbaku','id')->all();
        $jenisindustri = Md_jenisindustri::all();
        $suplier = Md_suplier::pluck('suplier','id')->all();
        $satuan = Md_satuan::pluck('satuan','id')->all();
        $jenistanaman = Md_jenistanaman::all();
        $jenissaprodi = Md_saprodi::all();
        $jenisternak = Md_jenisternak::all();
        $jenispakanternak = Md_jenispakanternak::all();
        $limbahternak = Md_limbahternak::all();
        $jenisikanbudidaya = Md_jenisikanbudidaya::all();
        $jenisikantangkap = Md_jenisikantangkap::all();
        $jenisusahadagang = Md_jenisusahadagang::all();
//        $jenispakanikan = Md_jenispakanikan::pluck('jenispakanikan','id')->all();
        $desa = Desa::select('iddesa', DB::raw('CONCAT(kecamatan, " - ", namadesa) AS desa'))
        ->join('kecamatan','desa.idkecamatan','=','kecamatan.idkecamatan')->pluck('desa','iddesa')->all();
        return view($this->view.'.index',compact('bidangusahapekerjaan','statuspekerjaan','asetusaha','perbankan','kredit','jenisindustri',
        'bahanbaku','suplier','satuan','jenistanaman','desa','jenissaprodi','jenisternak','jenispakanternak','limbahternak','jenisikanbudidaya',
        'jenispakanikan','jenisikantangkap','jenisusahadagang'));
    }
}
