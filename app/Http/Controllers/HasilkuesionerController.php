<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Bidang_industri;
use App\Models\Bidang_jasa;
use App\Models\Bidang_perdagangan;
use App\Models\Bidang_perikanan;
use App\Models\Bidang_pertanian;
use App\Models\Bidang_peternakan;
use App\Models\Kecamatan;
use App\Models\Pdrbdankredit;
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
        $bidangpeternakan = Bidang_peternakan::PersonalData($id)->first();
        return view('hasilkuesioners.detail', compact('bidangpeternakan'));
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
