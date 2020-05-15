<?php

namespace App\Http\Controllers;

use App\Http\Traits\Resource;
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
use App\Models\Penggunaanpakanternak;
use App\Models\Penghasilantambahan;
use App\Models\Pdrbdankredit;
use App\Models\Fasilitasperbankan;
use App\Models\Bidang_industri;
use App\Models\Garapanpertanian;
use App\Models\Bidang_perdagangan;
use App\Models\Kepemilikanusahadagang;
use App\Models\Bidang_pertanian;
use App\Models\Kepemilikansaprodi;
use App\Models\Bidang_peternakan;
use App\Models\Budidayaikan;
use App\Models\Pengolahanlimbahternak;
use App\Models\Perikanantangkap;
use App\Models\Bidang_perikanan;
use App\Models\Bidang_jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\DataTables;

class KuesionerController extends Controller
{
    use Resource;

//    protected $model = Kecamatan::class;
    protected $view = 'kuesioners';
    protected $route = 'kuesioner';

    public function __construct()
    {
        $this->middleware('can:pencacah');
    }

    public function index()
    {
        $pdrb = Pdrbdankredit::AnyData()->get();
        return view($this->view . '.index', compact('pdrb'));
    }

    public function show($id)
    {
        $penduduk = DB::table('penduduk')->where('nik', $id)->first();
        $bidangusahapekerjaan = Md_bidangusahapekerjaan::all();
        $statuspekerjaan = Md_statuspekerjaan::all();
        $asetusaha = Md_asetusaha::all();
        $perbankan = Md_perbankan::all();
        $kredit = Md_besaranperbankan::pluck('besaran', 'id')->all();
        $bahanbaku = Md_bahanbaku::pluck('bahanbaku', 'id')->all();
        $jenisindustri = Md_jenisindustri::all();
        $suplier = Md_suplier::pluck('suplier', 'id')->all();
        $satuan = Md_satuan::pluck('satuan', 'id')->all();
        $jenistanaman = Md_jenistanaman::all();
        $jenissaprodi = Md_saprodi::all();
        $jenisternak = Md_jenisternak::all();
        $jenispakanternak = Md_jenispakanternak::all();
        $limbahternak = Md_limbahternak::all();
        $jenisikanbudidaya = Md_jenisikanbudidaya::all();
        $jenisikantangkap = Md_jenisikantangkap::all();
        $jenisusahadagang = Md_jenisusahadagang::all();
        $penyakitternak = Md_penyakitternak::pluck('penyakitternak', 'id')->all();
        $jenispakanikan = Md_jenispakanikan::pluck('jenispakanikan', 'id')->all();

        //session kuesioner dasar
        $kuesdasar = Pdrbdankredit::PersonalData($id)->first();
        if (empty($kuesdasar)) {
            $stkuesdasar = 0;
        } else {
            $stkuesdasar = $kuesdasar->status();
        }
        //session industri
        $bdindustri = Bidang_industri::PersonalData($id)->first();
        if (empty($bdindustri)) {
            $stindustri = 0;
        } else {
            $stindustri = $bdindustri->status();
        }

        //session perdagangan
        $bdperdagangan = Bidang_perdagangan::PersonalData($id)->first();
        if (empty($bdperdagangan)) {
            $stperdagangan = 0;
        } else {
            $stperdagangan = $bdperdagangan->status();
        }

        //session pertanian
        $bdpertanian = Bidang_pertanian::PersonalData($id)->first();
        if (empty($bdpertanian)) {
            $stpertanian = 0;
        } else {
            $stpertanian = $bdpertanian->status();
        }

        //session peternakan
        $bdternak = Bidang_peternakan::PersonalData($id)->first();
        if (empty($bdternak)) {
            $stternak = 0;
        } else {
            $stternak = $bdternak->status();
        }

        //session Perikanan
        $bdperikanan = Bidang_perikanan::PersonalData($id)->first();
        if (empty($bdperikanan)) {
            $stperikanan = 0;
        } else {
            $stperikanan = $bdpertanian->status();
        }

        //session jasa
        $bdjasa = Bidang_jasa::PersonalData($id)->first();
        if (empty($bdjasa)) {
            $stjasa = 0;
        } else {
            $stjasa = $bdjasa->status();
        }

        $desa = Desa::select('iddesa', DB::raw('CONCAT(kecamatan, " - ", namadesa) AS desa'))
            ->join('kecamatan', 'desa.idkecamatan', '=', 'kecamatan.idkecamatan')->pluck('desa', 'iddesa')->all();
        return view($this->view . '.show', compact('bidangusahapekerjaan', 'statuspekerjaan', 'asetusaha', 'perbankan', 'kredit', 'jenisindustri',
            'bahanbaku', 'suplier', 'satuan', 'jenistanaman', 'desa', 'jenissaprodi', 'jenisternak', 'jenispakanternak', 'limbahternak', 'jenisikanbudidaya',
            'jenispakanikan', 'jenisikantangkap', 'jenisusahadagang', 'penyakitternak', 'penduduk',
            'stkuesdasar', 'stindustri', 'stperdagangan', 'stpertanian', 'stternak', 'stperikanan', 'stjasa'));
    }

    public function simpankuesionerdasar(Request $request)
    {
        $iddtdakp = 'DTD-012345-PANJI';
        $total = Md_bidangusahapekerjaan::count();
        $totalaset = Md_asetusaha::count();
        $totalfasilitas = Md_perbankan::count();
        $data = array_filter($request->all());
        for ($i = 1; $i <= $total; $i++) {
            $dasar = new Pekerjaantambahan();
            if (array_key_exists('bu' . $i, $data)) {
                $dasar->nik = $request->get('nik');
                $dasar->idjenisusaha = $data['bu' . $i];
                $dasar->idstatuspekerjaan = $data['idstatuspekerjaan' . $i];
                $dasar->save();
            }
        }
        for ($i = 1; $i <= $totalaset; $i++) {
            $aset = new Kepemilikanaset();
            if (array_key_exists('idasetusaha' . $i, $data)) {
                $aset->nik = $request->get('nik');
                $aset->idasetusaha = $data['idasetusaha' . $i];
                $aset->jumlahaset = $data['jumlahaset' . $i];
                $aset->save();
            }
        }

        $sda = new Penghasilantambahan();
        if (array_key_exists('namasumberdaya', $data)) {
            $sda->nik = $request->get('nik');
            $sda->namasumberdaya = $data['namasumberdaya'];
            $sda->panenpertahun = $data['panenpertahun'];
            $sda->hasilperpanen = $data['hasilperpanen'];
            $sda->save();
        }


        $pdrb = new Pdrbdankredit();
        $pdrb->nik = $request->get('nik');
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
                $fasilitas->nik = $request->get('nik');
                $fasilitas->idjenisperbankan = $data['idjenisperbankan' . $i];
                $fasilitas->namabank = $data['namabank' . $i];
                $fasilitas->cabang = $data['cabang' . $i];
                $fasilitas->save();
            }
        }
        \Session::flash("flash_notification", [
            "message" => " Data Kuesioner Dasar berhasil disimpan."
        ]);

        return Redirect::back();
    }

    public function simpanbidangindustri(Request $request)
    {
        $iddtdakp = 'DTD-012345-PANJI';
        $totalindustri = Md_jenisindustri::count();
        $data = array_filter($request->all());
        $bar = 'bar';
        for ($i = 1; $i <= $totalindustri + 1; $i++) {
            if (array_key_exists('idjenisindustri1bar' . $i, $data)) {
                for ($b = 1; $b <= 3; $b++) {
                    $industri = new Bidang_industri();
                    if (array_key_exists('namaproduk' . $b . $bar . $i, $data)) {
                        $industri->nik = $request->get('nik');
                        $industri->idjenisindustri = $data['idjenisindustri1bar' . $i];
                        if (array_key_exists('jenisindustri' . $b . $bar . $i, $data)) {
                            $industri->jenisindustri = $data['jenisindustri' . $b . $bar . $i];
                        }
                        $industri->namaproduk = $data['namaproduk' . $b . $bar . $i];
                        $industri->produksiperbulan = $data['produksiperbulan' . $b . $bar . $i];
                        $industri->satuanproduksi = $data['satuanproduksi' . $b . $bar . $i];
                        $industri->idbahanbaku = $data['idbahanbaku' . $b . $bar . $i];
                        $industri->kebutuhanperbulan = $data['kebutuhanperbulan' . $b . $bar . $i];
                        $industri->satuanbahanbaku = $data['satuanbahanbaku' . $b . $bar . $i];
                        $industri->hargakulakbahan = $data['hargakulakbahan' . $b . $bar . $i];
                        $industri->idsuplier = $data['idsuplier' . $b . $bar . $i];
                        $industri->namasuplier = $data['namasuplier' . $b . $bar . $i];
                        $industri->hargajualproduk = $data['hargajualproduk' . $b . $bar . $i];
                        $industri->operasionalperbulan = $data['operasionalperbulan' . $b . $bar . $i];
                        if (array_key_exists('pemasarandalamkabupaten' . $b . $bar . $i, $data)) {
                            $industri->pemasarandalamkabupaten = $data['pemasarandalamkabupaten' . $b . $bar . $i];
                        } else {
                            $industri->pemasarandalamkabupaten = 0;
                        }
                        if (array_key_exists('pemasaranluarkabupaten' . $b . $bar . $i, $data)) {
                            $industri->pemasaranluarkabupaten = $data['pemasaranluarkabupaten' . $b . $bar . $i];
                        } else {
                            $industri->pemasaranluarkabupaten = 0;
                        }
                        if (array_key_exists('pemasaranluarprovinsi' . $b . $bar . $i, $data)) {
                            $industri->pemasaranluarprovinsi = $data['pemasaranluarprovinsi' . $b . $bar . $i];
                        } else {
                            $industri->pemasaranluarprovinsi = 0;
                        }
                        if (array_key_exists('pemasaranluarnegeri' . $b . $bar . $i, $data)) {
                            $industri->pemasaranluarnegeri = $data['pemasaranluarnegeri' . $b . $bar . $i];
                        } else {
                            $industri->pemasaranluarnegeri = 0;
                        }
                        $industri->save();
                    }
                }
            }
        }
        \Session::flash("flash_notification", [
            "message" => " Data bidang industri berhasil disimpan."
        ]);
        return Redirect::back();
    }

    public function simpanbidangperdagangan(Request $request)
    {

        $iddtdakp = 'DTD-012345-PANJI';
        $totaldagang = Md_jenisusahadagang::count();
        $data = array_filter($request->all());
        $bar = 'bar';
        for ($i = 1; $i <= $totaldagang + 1; $i++) {
            if (array_key_exists('idjenisusahadagang1bar' . $i, $data)) {
                for ($b = 1; $b <= 10; $b++) {
                    $perdagangan = new Bidang_perdagangan();
                    if (array_key_exists('produkunggulan' . $b . $bar . $i, $data)) {
                        $perdagangan->nik = $request->get('nik');
                        $perdagangan->idjenisusahadagang = $data['idjenisusahadagang1bar' . $i];
                        $perdagangan->produkunggulan = $data['produkunggulan' . $b . $bar . $i];
                        $perdagangan->jumlahkulakperbulan = $data['jumlahkulakperbulan' . $b . $bar . $i];
                        $perdagangan->satuankulak = $data['satuankulak' . $b . $bar . $i];
                        $perdagangan->hargakulak = $data['hargakulak' . $b . $bar . $i];
                        $perdagangan->hargajual = $data['hargajual' . $b . $bar . $i];
                        $perdagangan->satuanjual = $data['satuanjual' . $b . $bar . $i];
                        $perdagangan->idsuplier = $data['idsuplier' . $b . $bar . $i];
                        $perdagangan->namasuplier = $data['namasuplier' . $b . $bar . $i];
                        $perdagangan->save();
                    }
                }

                $milikdagang = new Kepemilikanusahadagang();
                $milikdagang->nik = $request->get('nik');
                $milikdagang->idjenisusahadagang = $data['idjenisusahadagang1bar' . $i];
                if (array_key_exists('jenisusahadagang1bar' . $i, $data)) {
                    $milikdagang->jenisusahadagang = $data['jenisusahadagang1bar' . $i];
                }
                if (array_key_exists('pemasarandalamkecamatan1bar' . $i, $data)) {
                    $milikdagang->konsumendalamkecamatan = $data['pemasarandalamkecamatan1bar' . $i];
                } else {
                    $milikdagang->konsumendalamkecamatan = 0;
                }
                if (array_key_exists('pemasarandalamkabupaten1bar' . $i, $data)) {
                    $milikdagang->konsumendalamkabupaten = $data['pemasarandalamkabupaten1bar' . $i];
                } else {
                    $milikdagang->konsumendalamkabupaten = 0;
                }
                if (array_key_exists('pemasaranluarkabupaten1bar' . $i, $data)) {
                    $milikdagang->konsumenluarkabupaten = $data['pemasaranluarkabupaten1bar' . $i];
                } else {
                    $milikdagang->konsumenluarkabupaten = 0;
                }
                if (array_key_exists('pemasaranluarprovinsi1bar' . $i, $data)) {
                    $milikdagang->konsumenluarprovinsi = $data['pemasaranluarprovinsi1bar' . $i];
                } else {
                    $milikdagang->konsumenluarprovinsi = 0;
                }
                $milikdagang->save();
            }

        }
        \Session::flash("flash_notification", [
            "message" => " Data bidang perdagangan berhasil disimpan."
        ]);
        return Redirect::back();
    }

    public function simpanbidangpertanian(Request $request)
    {


        $iddtdakp = 'DTD-012345-PANJI';
        $totaltanaman = Md_jenistanaman::count();
        $totalsaprodi = Md_saprodi::count();
        $data = array_filter($request->all());
        for ($i = 1; $i <= $totaltanaman + 1; $i++) {
            $garapan = new Garapanpertanian();
            if (array_key_exists('idjenistanaman' . $i, $data)) {
                $garapan->nik = $request->get('nik');
                $garapan->idjenistanaman = $data['idjenistanaman' . $i];
                $garapan->luastanam = $data['luastanam' . $i];
                $garapan->satuanluas = $data['satuanluas' . $i];
                $garapan->bulantanam = $data['bulantanam' . $i];
                $garapan->bulantanamselanjutnya = $data['bulantanamselanjutnya' . $i];
                $garapan->kebutuhanbibit = $data['kebutuhanbibit' . $i];
                $garapan->satuanbibit = $data['satuanbibit' . $i];
                $garapan->hargabibit = $data['hargabibit' . $i];
                $garapan->kapasitaspanen = $data['kapasitaspanen' . $i];
                $garapan->panenpertahun = $data['panenpertahun' . $i];
                $garapan->operasionaltanam = $data['operasionaltanam' . $i];
                $garapan->save();
            }
        }
        $pertanian = new Bidang_pertanian();
        $pertanian->nik = $request->get('nik');
        $pertanian->statuspengelolaan = $data['statuspengelolaan'];
        $pertanian->statuspembibitan = $data['statuspembibitan'];
        if (array_key_exists('suplierbibit', $data)) {
            $pertanian->namasuplier = $data['suplierbibit'];
            $pertanian->iddesasuplier = $data['iddesasuplierbibit'];
        }
        if (array_key_exists('kebutuhanpupukorganik', $data)) {
            $pertanian->kebutuhanpupukorganik = $data['kebutuhanpupukorganik'];
            $pertanian->jenispupukorganik = $data['jenispupukorganik'];
        }
        if (array_key_exists('kebutuhanpupukanorganik', $data)) {
            $pertanian->kebutuhanpupukanorganik = $data['kebutuhanpupukanorganik'];
            $pertanian->jenispupukanorganik = $data['jenispupukanorganik'];
        }
        $pertanian->sumberpupuk = $data['sumberpupuk'];
        if (array_key_exists('pupukbuatan', $data)) {
            $pertanian->pupukbuatan = $data['pupukbuatan'];
        }
        if (array_key_exists('namakios', $data)) {
            $pertanian->namakios = $data['namakios'];
            $pertanian->iddesakios = $data['iddesakios'];
        }
        $pertanian->sumberirigasi = $data['sumberirigasi'];
        $pertanian->modelpenjualan = $data['modelpenjualan'];
        if (array_key_exists('hargaijon', $data)) {
            $pertanian->hargaijon = $data['hargaijon'];
            $pertanian->luasanijon = $data['luasanijon'];
            $pertanian->satuanijon = $data['satuanijon'];
        }
        $pertanian->pemasaranhasil = $data['pembeli'];
        $pertanian->pengolahanlimbah = $data['pengolahanlimbahtani'];
        if (array_key_exists('limbaholahtani', $data)) {
            $pertanian->jenisolahanlimbah = $data['limbaholahtani'];
        }
        if (array_key_exists('kapasitaslimbahtani', $data)) {
            $pertanian->kapasitaslimbahperpanen = $data['kapasitaslimbahtani'];
            $pertanian->hargasebelumolah = $data['limbahtanijualtanpaolah'];
            $pertanian->hargasesudaholah = $data['limbahtanijualolah'];
        }
        $pertanian->save();

        for ($i = 1; $i <= $totalsaprodi; $i++) {
            $saprodi = new Kepemilikansaprodi();
            if (array_key_exists('idjenissaprodi' . $i, $data)) {
                $saprodi->nik = $request->get('nik');
                $saprodi->idjenissaprodi = $data['idjenissaprodi' . $i];
                $saprodi->save();
            }
        }
        \Session::flash("flash_notification", [
            "message" => " Data bidang pertanian/perkebunan berhasil disimpan."
        ]);
        return Redirect::back();
    }

    public function simpanbidangperikanan(Request $request)
    {

        $iddtdakp = 'DTD-012345-PANJI';
        $data = array_filter($request->all());
        $totaltangkap = Md_jenisikantangkap::count();
        $totalbudidaya = Md_jenisikanbudidaya::count();
        $data = array_filter($request->all());
        for ($i = 1; $i <= $totalbudidaya + 1; $i++) {
            $ibudidaya = new Budidayaikan();
            if (array_key_exists('idikanbudidaya' . $i, $data)) {
                $ibudidaya->nik = $request->get('nik');
                $ibudidaya->idjenisikan = $data['idikanbudidaya' . $i];
                $ibudidaya->luaskolam = $data['luaskolam' . $i];
                $ibudidaya->satuanluas = $data['satuanluas' . $i];
                $ibudidaya->hargabibit = $data['hargabibit' . $i];
                $ibudidaya->satuanbibit = $data['satuanbibit' . $i];
                $ibudidaya->hargajual = $data['hargajual' . $i];
                $ibudidaya->satuanjual = $data['satuanjual' . $i];
                $ibudidaya->tanggaltebar = $data['tanggaltebar' . $i];
                $ibudidaya->tanggalpanen = $data['tanggalpanen' . $i];
                $ibudidaya->kapasitasperpanen = $data['kapasitasperpanen' . $i];
                $ibudidaya->panenpertahun = $data['panenpertahun' . $i];
                $ibudidaya->biayaproduksi = $data['biayaproduksi' . $i];
                $ibudidaya->idjenispakan = $data['idjenispakan' . $i];
                $ibudidaya->kebutuhanpakanperhari = $data['kebutuhanpakanperhari' . $i];
                $ibudidaya->satuanpakan = $data['satuanpakan' . $i];
                $ibudidaya->hargapakan = $data['hargapakan' . $i];
                $ibudidaya->save();
            }
        }
        for ($v = 1; $v <= $totaltangkap + 1; $v++) {
            $itangkap = new Perikanantangkap();
            if (array_key_exists('idikantangkap' . $v, $data)) {
                $itangkap->nik = $request->get('nik');
                $itangkap->idjenisikan = $data['idikantangkap' . $v];
                if (array_key_exists('jenisikantangkap' . $v, $data)) {
                    $itangkap->jenisikantangkap = $data['jenisikantangkap' . $v];
                }
                $itangkap->kapasitasperhari = $data['kapasitasperhari' . $v];
                if (array_key_exists('pemasarantangkap1' . $v, $data)) {
                    $itangkap->pemasarandalamkabupaten = $data['pemasarantangkap1' . $v];
                } else {
                    $itangkap->pemasarandalamkabupaten = 0;
                }
                if (array_key_exists('pemasarantangkap2' . $v, $data)) {
                    $itangkap->pemasaranluarkabupaten = $data['pemasarantangkap2' . $v];
                } else {
                    $itangkap->pemasaranluarkabupaten = 0;
                }
                if (array_key_exists('pemasarantangkap3' . $v, $data)) {
                    $itangkap->pemasaranluarprovinsi = $data['pemasarantangkap3' . $v];
                } else {
                    $itangkap->pemasaranluarprovinsi = 0;
                }
                if (array_key_exists('pemasarantangkap4' . $v, $data)) {
                    $itangkap->pemasaranluarnegeri = $data['pemasarantangkap4' . $v];
                } else {
                    $itangkap->pemasaranluarnegeri = 0;
                }
                $itangkap->save();
            }
        }

        $perikanan = new Bidang_perikanan();
        $perikanan->nik = $request->get('nik');
        $perikanan->perolehanpakan = $data['perolehanpakan'];
        if (array_key_exists('idsuplier', $data)) {
            $perikanan->idsuplier = $data['idsuplier'];
            $perikanan->namasuplier = $data['namasuplier'];
        }
        $perikanan->olahanlanjutan = $data['olahanlanjutan'];
        if (array_key_exists('namaolahan', $data)) {
            $perikanan->namaolahan = $data['namaolahan'];
            $perikanan->produksiperbulan = $data['produksiperbulan'];
            $perikanan->satuanproduksi = $data['satuanproduksi'];
            $perikanan->hargajual = $data['hargajual'];
            $perikanan->satuanjual = $data['satuanjual'];
        }
        if (array_key_exists('pemasaranolahanikan1', $data)) {
            $perikanan->pemasarandalamkabupaten = $data['pemasaranolahanikan1'];
        } else {
            $perikanan->pemasarandalamkabupaten = 0;
        }
        if (array_key_exists('pemasaranolahanikan2', $data)) {
            $perikanan->pemasaranluarkabupaten = $data['pemasaranolahanikan2'];
        } else {
            $perikanan->pemasaranluarkabupaten = 0;
        }
        if (array_key_exists('pemasaranolahanikan3', $data)) {
            $perikanan->pemasaranluarprovinsi = $data['pemasaranolahanikan3'];
        } else {
            $perikanan->pemasaranluarprovinsi = 0;
        }
        if (array_key_exists('pemasaranolahanikan4', $data)) {
            $perikanan->pemasaranluarnegeri = $data['pemasaranolahanikan4'];
        } else {
            $perikanan->pemasaranluarnegeri = 0;
        }
        $perikanan->save();

        \Session::flash("flash_notification", [
            "message" => " Data bidang perikanan berhasil disimpan."
        ]);

        return Redirect::back();
    }

    public function simpanbidangjasa(Request $request)
    {

        $iddtdakp = 'DTD-012345-PANJI';
        $data = array_filter($request->all());
        for ($i = 1; $i <= 4; $i++) {
            $jasa = new Bidang_jasa();
            if (array_key_exists('jenisjasa' . $i, $data)) {
                $jasa->nik = $request->get('nik');
                $jasa->jenisjasa = $data['jenisjasa' . $i];
                $jasa->konsumenperminggu = $data['konsumenperminggu' . $i];
                $jasa->brutoperbulan = $data['brutoperbulan' . $i];
                if (array_key_exists('konsumendalamkabupaten' . $i, $data)) {
                    $jasa->konsumendalamkabupaten = $data['konsumendalamkabupaten' . $i];
                } else {
                    $jasa->konsumendalamkabupaten = 0;
                }
                if (array_key_exists('konsumenluarkabupaten' . $i, $data)) {
                    $jasa->konsumenluarkabupaten = $data['konsumenluarkabupaten' . $i];
                } else {
                    $jasa->konsumenluarkabupaten = 0;
                }
                if (array_key_exists('konsumenluarprovinsi' . $i, $data)) {
                    $jasa->konsumenluarprovinsi = $data['konsumenluarprovinsi' . $i];
                } else {
                    $jasa->konsumenluarprovinsi = 0;
                }
                if (array_key_exists('konsumenluarnegeri' . $i, $data)) {
                    $jasa->konsumenluarnegeri = $data['konsumenluarnegeri' . $i];
                } else {
                    $jasa->konsumenluarnegeri = 0;
                }
                $jasa->save();
            }
        }
        \Session::flash("flash_notification", [
            "message" => " Data bidang jasa berhasil disimpan."
        ]);
        return Redirect::back();
    }

    //BIDANG PETERNAKAN
    public function simpanbidangpeternakan(Request $request)
    {

        $totalternak = Md_jenisternak::count();
        $totallimbah = Md_limbahternak::count();
        $totalpakanternak = Md_jenispakanternak::count();
        $data = array_filter($request->all());
        //kelola ternak
        for ($i = 1; $i <= $totalternak + 1; $i++) {
            $kelolaternak = new Pengelolaanternak();
            if (array_key_exists('idjenisternak' . $i, $data)) {
                $kelolaternak->nik = $request->get('nik');
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
        $request->merge(['nik' => $request->get('nik')]);
        Bidang_peternakan::create($request->all());

        //kelola limbah
        for ($i = 1; $i <= $totallimbah + 1; $i++) {
            $olahlimbah = new Pengolahanlimbahternak();
            if (array_key_exists('idlimbahternak' . $i, $data)) {
                $olahlimbah->nik = $request->get('nik');
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

        //penggunaan pakan ternak
        for ($i = 1; $i <= $totalpakanternak + 1; $i++) {
            $pakanternak = new Penggunaanpakanternak();
            if (array_key_exists('idjenispakanternak' . $i, $data)) {
                $pakanternak->nik = $request->get('nik');
                $pakanternak->idjenispakanternak = $data['idjenispakanternak' . $i];
                if (array_key_exists('namapakanternak' . $i, $data)) {
                    $pakanternak->namapakanternak = $data['namapakanternak' . $i];
                }
                $pakanternak->kebutuhanperhari = $data['kebutuhanperhari' . $i];
                $pakanternak->satuanpakan = $data['satuanpakan' . $i];
                $pakanternak->hargapakan = $data['hargapakan' . $i];
                $pakanternak->save();
            }
        }


        \Session::flash("flash_notification", [
            "message" => " Data bidang peternakan berhasil disimpan."
        ]);
        return Redirect::back();
    }

    public function anyData()
    {
        return DataTables::of(DB::table('penduduk')->get())
            ->addColumn('action', function ($data) {
                $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="fas fa-times" style="color: #dc3545"></i></a>';
                $detail = '<a href="' . route($this->route . '.show', [$this->route => $data->nik]) . '"<i class="fas fa-search" style="color:#17a2b8"></i></a>';
                return $detail . '&nbsp' . '&nbsp' . $del;
            })
            ->make(true);
    }
}
