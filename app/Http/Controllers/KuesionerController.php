<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
use App\Models\Bidang_peternakan;
use App\Models\Kecamatan;
use App\Models\Md_bidangusahapekerjaan;
use App\Models\Md_penyakitternak;
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
use App\Models\Pekerjaantambahan;
use App\Models\Kepemilikanaset;
use App\Models\Pengelolaanternak;
use App\Models\Penghasilantambahan;
use App\Models\Pdrbdankredit;
use App\Models\Fasilitasperbankan;
use App\Models\Bidang_industri;
use App\Models\Pengolahanlimbahternak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

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
        $kredit = Md_besaranperbankan::pluck('besaran', 'id')->all();
        $bahanbaku = Md_bahanbaku::pluck('bahanbaku', 'id')->all();
        $jenisindustri = Md_jenisindustri::all();
        $suplier = Md_suplier::pluck('suplier', 'id')->all();
        $penyakitternak = Md_penyakitternak::pluck('penyakitternak', 'id')->all();
        $satuan = Md_satuan::pluck('satuan', 'id')->all();
        $jenistanaman = Md_jenistanaman::all();
        $jenissaprodi = Md_saprodi::all();
        $jenisternak = Md_jenisternak::all();
        $jenispakanternak = Md_jenispakanternak::all();
        $limbahternak = Md_limbahternak::all();
        $jenisikanbudidaya = Md_jenisikanbudidaya::all();
        $jenisikantangkap = Md_jenisikantangkap::all();
        $jenisusahadagang = Md_jenisusahadagang::all();
        $jenispakanikan = Md_jenispakanikan::pluck('jenispakanikan', 'id')->all();
        $desa = Desa::select('iddesa', DB::raw('CONCAT(kecamatan, " - ", namadesa) AS desa'))
            ->join('kecamatan', 'desa.idkecamatan', '=', 'kecamatan.idkecamatan')->pluck('desa', 'iddesa')->all();
        return view($this->view . '.index', compact('bidangusahapekerjaan', 'statuspekerjaan', 'asetusaha', 'perbankan', 'kredit', 'jenisindustri',
            'bahanbaku', 'suplier', 'satuan', 'jenistanaman', 'desa', 'jenissaprodi', 'jenisternak', 'jenispakanternak', 'limbahternak', 'jenisikanbudidaya',
            'jenispakanikan', 'jenisikantangkap', 'jenisusahadagang', 'penyakitternak'));
    }

    public function simpankuesionerdasar(Request $request)
    {
        $nik = '132410101085';
        $iddtdakp = 'DTD-012345-PANJI';
        $total = Md_bidangusahapekerjaan::count();
        $totalaset = Md_asetusaha::count();
        $totalfasilitas = Md_perbankan::count();
        $data = array_filter($request->all());
        for ($i = 1; $i <= $total; $i++) {
            $dasar = new Pekerjaantambahan();
            if (array_key_exists('bu' . $i, $data)) {
                $dasar->nik = $nik;
                $dasar->idjenisusaha = $data['bu' . $i];
                $dasar->idstatuspekerjaan = $data['idstatuspekerjaan' . $i];
                $dasar->save();
            }
        }
        for ($i = 1; $i <= $totalaset; $i++) {
            $aset = new Kepemilikanaset();
            if (array_key_exists('idasetusaha' . $i, $data)) {
                $aset->nik = $nik;
                $aset->idasetusaha = $data['idasetusaha' . $i];
                $aset->jumlahaset = $data['jumlahaset' . $i];
                $aset->save();
            }
        }

        $sda = new Penghasilantambahan();
        if (array_key_exists('namasumberdaya', $data)) {
            $sda->nik = $nik;
            $sda->namasumberdaya = $data['namasumberdaya'];
            $sda->panenpertahun = $data['panenpertahun'];
            $sda->hasilperpanen = $data['hasilperpanen'];
            $sda->save();
        }


        $pdrb = new Pdrbdankredit();
        $pdrb->nik = $nik;
        $pdrb->iddtdakp = $iddtdakp;
        $pdrb->pendapatanperbulan = $data['pendapatanperbulan'];
        if (array_key_exists('idbesarankredit', $data)) {
            $pdrb->idbesarankredit = $data['idbesarankredit'];
            $pdrb->lamakredit = $data['lamakredit'];
        }
        $pdrb->save();

        for ($i = 1; $i <= $totalfasilitas; $i++) {
            $fasilitas = new Fasilitasperbankan();
            if (array_key_exists('idjenisperbankan' . $i, $data)) {
                $fasilitas->nik = $nik;
                $fasilitas->idjenisperbankan = $data['idjenisperbankan' . $i];
                $fasilitas->namabank = $data['namabank' . $i];
                $fasilitas->cabang = $data['cabang' . $i];
                $fasilitas->save();
            }
        }

        return redirect(route($this->route . '.index'));

        // print_r($data);
    }

    public function simpanbidangindustri(Request $request)
    {
        $nik = '132410101085';
        $iddtdakp = 'DTD-012345-PANJI';
        $totalindustri = Md_jenisindustri::count();
        $data = array_filter($request->all());
        for ($i = 1; $i <= $totalindustri + 1; $i++) {
            $industri = new Bidang_industri();
            if (array_key_exists('idjenisindustri' . $i, $data)) {
                $industri->nik = $nik;
                $industri->idjenisindustri = $data['idjenisindustri' . $i];
                if (array_key_exists('jenisindustri' . $i, $data)) {
                    $industri->jenisindustri = $data['jenisindustri' . $i];
                }
                $industri->namaproduk = $data['namaproduk' . $i];
                $industri->produksiperbulan = $data['produksiperbulan' . $i];
                $industri->satuanproduksi = $data['satuanproduksi' . $i];
                $industri->idbahanbaku = $data['idbahanbaku' . $i];
                $industri->kebutuhanperbulan = $data['kebutuhanperbulan' . $i];
                $industri->satuanbahanbaku = $data['satuanbahanbaku' . $i];
                $industri->hargakulakbahan = $data['hargakulakbahan' . $i];
                $industri->satuankulak = $data['satuankulak' . $i];
                $industri->idsuplier = $data['idsuplier' . $i];
                $industri->namasuplier = $data['namasuplier' . $i];
                $industri->hargajualproduk = $data['hargajualproduk' . $i];
                $industri->satuanjual = $data['satuanjual' . $i];
                $industri->operasionalperbulan = $data['operasionalperbulan' . $i];
                if (array_key_exists('pemasarandalamkabupaten' . $i, $data)) {
                    $industri->pemasarandalamkabupaten = $data['pemasarandalamkabupaten' . $i];
                } else {
                    $industri->pemasarandalamkabupaten = 0;
                }
                if (array_key_exists('pemasaranluarkabupaten' . $i, $data)) {
                    $industri->pemasaranluarkabupaten = $data['pemasaranluarkabupaten' . $i];
                } else {
                    $industri->pemasaranluarkabupaten = 0;
                }
                if (array_key_exists('pemasaranluarprovinsi' . $i, $data)) {
                    $industri->pemasaranluarprovinsi = $data['pemasaranluarprovinsi' . $i];
                } else {
                    $industri->pemasaranluarprovinsi = 0;
                }
                if (array_key_exists('pemasaranluarnegeri' . $i, $data)) {
                    $industri->pemasaranluarnegeri = $data['pemasaranluarnegeri' . $i];
                } else {
                    $industri->pemasaranluarnegeri = 0;
                }
                $industri->save();
            }
        }

        return redirect(route($this->route . '.index'));

        // print_r($data);
    }

    //BIDANG PETERNAKAN
    public function simpanbidangpeternakan(Request $request)
    {
        $nik = '132410101085';
        $totalternak = Md_jenisternak::count();
        $totallimbah = Md_limbahternak::count();
        $data = array_filter($request->all());
        //kelola ternak
        for ($i = 1; $i <= $totalternak + 1; $i++) {
            $kelolaternak = new Pengelolaanternak();
            if (array_key_exists('idjenisternak' . $i, $data)) {
                $kelolaternak->nik = $nik;
                $kelolaternak->idjenisternak = $data['idjenisternak' . $i];
                if (array_key_exists('jenisternak' . $i, $data)) {
                    $kelolaternak->jenisternak = $data['jenisternak' . $i];
                } else {
                    unset($kelolaternak['jenisternak' . $i]);
                }
                $kelolaternak->idjenisternak = $data['idjenisternak' . $i];
                $kelolaternak->statuskepemilikan = $data['statuskepemilikan' . $i];
                $kelolaternak->jumlahternak = $data['jumlahternak' . $i];
                $kelolaternak->hargabibitternak = $data['hargabibitternak' . $i];
                $kelolaternak->hargajualternak = $data['hargajualternak' . $i];
                $kelolaternak->hargajualhasilpeternakan = $data['hjhasilpeternakan' . $i];
                $kelolaternak->satuanhasilpeternakan = $data['satuanhasilpeternakan' . $i];
                $kelolaternak->kapasitasproduksipertahun = $data['kptahun' . $i];
                $kelolaternak->kapasitashasilternakperperiode = $data['khternakperiode' . $i];
                $kelolaternak->periodepertahun = $data['periodepertahun' . $i];
                $kelolaternak->operasionalperproduksi = $data['operasionalperproduksi' . $i];
                $kelolaternak->save();
            }
        }
        //bidang peternakan
        $request->merge(['nik' => $nik]);
        Bidang_peternakan::create($request->all());

        //kelola limbah
        for ($i = 1; $i <= $totallimbah + 1; $i++) {
            $olahlimbah = new Pengolahanlimbahternak();
            if (array_key_exists('idlimbahternak' . $i, $data)) {
                $olahlimbah->nik = $nik;
                $olahlimbah->idlimbahternak = $data['idlimbahternak' . $i];
                if (array_key_exists('jenislimbahternak' . $i, $data)) {
                    $olahlimbah->jenislimbahternak = $data['jenislimbahternak' . $i];
                }
                $olahlimbah->kapasitasperbulan = $data['kapasitasperbulan' . $i];
                $olahlimbah->satuanlimbah = $data['satuanlimbah' . $i];
                $olahlimbah->hargajual = $data['hargajual' . $i];
                $olahlimbah->save();
            }
        }

        return redirect(route($this->route . '.index'));
    }

    public function hasilkuesioner()
    {
        return view($this->view . '.hasilkuesioner');
    }

    public function anyData()
    {
        return DataTables::of(Penghasilantambahan::GetYear())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="fas fa-times" style="color: #dc3545"></i></a>';
                $edit = '<a href="' . route($this->route . '.edit', [$this->route => $data->id]) . '"<i class="fas fa-edit"></i></a>';
                return $edit . '&nbsp' . '&nbsp' . $del;
            })
            ->make(true);
    }

}
