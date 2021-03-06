<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Bidang_industri;
use App\Models\Bidang_jasa;
use App\Models\Bidang_perdagangan;
use App\Models\Bidang_perikanan;
use App\Models\Bidang_pertanian;
use App\Models\Bidang_peternakan;
use App\Models\Fasilitasperbankan;
use App\Models\Kecamatan;
use App\Models\Kepemilikanaset;
use App\Models\Kepemilikanusahadagang;
use App\Models\Pdrbdankredit;
use App\Models\Pekerjaantambahan;
use App\Models\Penghasilantambahan;
use App\Models\Garapanpertanian;
use App\Models\Kepemilikansaprodi;
use App\Models\Pengelolaanternak;
use App\Models\Penggunaanpakanternak;
use App\Models\Pengolahanlimbahternak;
use App\Models\Perikanantangkap;
use App\Models\Budidayaikan;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class HasilkuesionerController extends Controller
{

    use Resource;

//    protected $model = Kecamatan::class;
    protected $view = 'hasilkuesioners';
    protected $route = 'hasilkuesioner';

    public function __construct()
    {
        $this->middleware('can:pencacah');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('hasilkuesioners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $pdrb = Pdrbdankredit::PersonalData($id)->first();
        $asetusaha = Kepemilikanaset::PersonalData($id)->get();
        $pekerjaantambahan = Pekerjaantambahan::PersonalData($id)->get();
        $hasiltambahan = Penghasilantambahan::PersonalData($id)->get();
        $perbankan = Fasilitasperbankan::PersonalData($id)->get();
        $kepemilikandagang = Kepemilikanusahadagang::PersonalData($id)->get();
        $industri = Bidang_industri::PersonalData($id)->get();
        $perdagangan = Bidang_perdagangan::PersonalData($id)->get();
        $pertanian = Bidang_pertanian::PersonalData($id)->first();
        $garapanpertanian = Garapanpertanian::PersonalData($id)->get();
        $kepemilikansaprodi = Kepemilikansaprodi::PersonalData($id)->get();
        $peternakan = Bidang_peternakan::PersonalData($id)->first();
        $pengelolaanternak = Pengelolaanternak::PersonalData($id)->get();
        $penggunaanpakanternak = Penggunaanpakanternak::PersonalData($id)->get();
        $pengolahanlimbahternak = Pengolahanlimbahternak::PersonalData($id)->get();
        $perikanan = Bidang_perikanan::PersonalData($id)->first();
        $perikanantangkap = Perikanantangkap::PersonalData($id)->get();
        $budidayaikan = Budidayaikan::PersonalData($id)->get();
        $jasa = Bidang_jasa::PersonalData($id)->get();

        return view('hasilkuesioners.detail', compact('pdrb','pekerjaantambahan','asetusaha','hasiltambahan','perbankan','industri',
            'perdagangan','kepemilikandagang','pertanian','peternakan','perikanan','jasa','garapanpertanian','kepemilikansaprodi',
        'pengelolaanternak','penggunaanpakanternak','pengolahanlimbahternak','perikanantangkap','budidayaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function anyData()
    {
        return DataTables::of(Pdrbdankredit::AnyData())
            ->addColumn('kuesionerdasar', function ($data) {
                $kuesionerdasar = Pdrbdankredit::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->nik]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangindustri', function ($data) {
                $kuesionerdasar = Bidang_industri::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->nik]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangperdagangan', function ($data) {
                $kuesionerdasar = Bidang_perdagangan::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->nik]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangpertanian', function ($data) {
                $kuesionerdasar = Bidang_pertanian::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->id]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangpeternakan', function ($data) {
                $kuesionerdasar = Bidang_peternakan::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->nik]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangperikanan', function ($data) {
                $kuesionerdasar = Bidang_perikanan::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->id]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('bidangjasa', function ($data) {
                $kuesionerdasar = Bidang_jasa::PersonalData($data->nik);
                if ($kuesionerdasar->exists()) {
                    $view = '<a href="' . route($this->route . '.edit', [$this->route => $data->nik]) . '"<i class="fas fa-edit"></i></a>';
                    return 'ada' . '&nbsp' . '&nbsp' . $view;
                } else {
                    return 'Tidak ada';
                }
            })
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="fas fa-times" style="color: #dc3545"></i></a>';
                $detail = '<a href="' . route($this->route . '.show', [$this->route => $data->nik]) . '"<i class="fas fa-search" style="color:#17a2b8"></i></a>';
                return $detail . '&nbsp' . '&nbsp' . $del;
            })
            ->rawColumns([
                'kuesionerdasar',
                'bidangindustri',
                'bidangperdagangan',
                'bidangpertanian',
                'bidangpeternakan',
                'bidangperikanan',
                'bidangjasa', 'action'])
            ->make(true);
    }
}
