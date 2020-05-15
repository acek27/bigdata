@extends('layouts.master')
@section('title')
    DETAIL KUESIONER
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="callout callout-info">
                        <h5><i class="fas fa-info"></i> Note:</h5>
                        This page has been enhanced for printing. Click the print button at the bottom of the kuesioner
                        to test.
                    </div>


                    <!-- Main content -->
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Pemerintah Kabupaten Situbondo
                                    <small class="float-right">Date: {{\Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y")}}</small>
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                Identitas Penduduk
                                <br>
                                <address>
                                    <strong>Nama Penduduk</strong><br>
                                    NIK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<br>
                                    Alamat &nbsp;&nbsp;&nbsp;&nbsp; :<br>
                                    Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<br>
                                    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Keterangan Dasar
                                <address>
                                    <strong>Pekerjaan Utama</strong><br>
                                </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <b>Kuesioner Nomer : #1 </b><br>
                                <br>
                                <b>Pendata:</b> Mr.x<br>
                                <b>Tgl Pendataan:</b> 2/22/2014<br>
                                <b>Responden:</b> Mr.y
                            </div>
                            <!-- /.col -->
                        </div>

                        <!-- KUESIONER DASAR -->
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 2%;text-align: center; vertical-align: middle">No</th>
                                        <th style="width: 65%; vertical-align: middle">Pertanyaan</th>
                                        <th style="width: 38%; vertical-align: middle">Jawaban</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sebutkan bidang usaha pekerjaan tambahan anda dan jelaskan status dalam
                                            pekerjaan tersebut!
                                        </td>
                                        <td>
                                            @if($pekerjaantambahan->isEmpty()) -
                                            @else
                                                @php($i=1)
                                                @foreach($pekerjaantambahan as $pekerjaan)
                                                    {{$i}}{{'. '}}{{$pekerjaan->md_bidangusahapekerjaans->bidangusaha}}
                                                    - {{$pekerjaan->md_statuspekerjaans->statuspekerjaan}} <br>
                                                    @php($i++)
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sebutkan Aset usaha apa saja yang anda miliki saat ini? sebutkan
                                            jumlahnya!
                                        </td>
                                        <td>
                                            @if($asetusaha->isEmpty()) -
                                            @else
                                                @php($i=1)
                                                @foreach($asetusaha as $aset)
                                                    {{$i}}{{'. '}}{{$aset->md_asetusahas->asetusaha}}
                                                    - {{$aset->jumlahaset}} {{$aset->md_asetusahas->satuan}} <br>
                                                    @php($i++)
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Apakah ada Sumber Daya alam/buatan bukan merupakan usaha utama yang dapat
                                            menghasilkan penghasilan tambahan bagi rumah tangga?
                                        </td>
                                        <td>
                                            @if($hasiltambahan->isEmpty()) Tidak ada
                                            @else Ada
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Sebutkan Nama Sumber Daya alam/buatan bukan merupakan usaha utama yang dapat
                                            menghasilkan penghasilan tambahan bagi rumah tangga,
                                            Jumlah panen dalam satu tahun dan Perkiraan Penghasilan dari penjualan
                                            sumber daya tersebut per periode panen!
                                        </td>
                                        <td>
                                            @if($hasiltambahan->isEmpty()) -
                                            @else
                                                @php($i=1)
                                                @foreach($hasiltambahan as $sda)
                                                    {{$i}}{{'. '}}{{$sda->namasumberdaya}} -
                                                    Panen {{$sda->panenpertahun}}
                                                    x/tahun - Rp.{{$sda->hasilperpanen}}/panen <br>
                                                    @php($i++)
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Berapa rata-rata total penghasilan kepala rumah tangga beserta seluruh
                                            anggota rumah tangga yang bekerja dalam satu bulan
                                        </td>
                                        <td>Rp.{{$pdrb->pendapatanperbulan}} - {{$pdrb->getPendapatan()}}</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Apakah usaha anda menggunakan fasilitas perbankan/koperasi/lainnya?</td>
                                        <td>
                                            @if($perbankan->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Apa jenis fasilitas perbankan yang anda pakai? sebutkan nama Bank beserta
                                            alamat/cabang!
                                        </td>
                                        <td>
                                            @if($perbankan->isEmpty()) -
                                            @else
                                                @php($i=1)
                                                @foreach($perbankan as $bank)
                                                    {{$i}}{{'. '}}{{$bank->md_perbankans->jenisperbankan}}
                                                    - {{$bank->namabank}} - {{$bank->cabang}}
                                                    @php($i++)
                                                @endforeach
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Berapa besaran kredit yang anda gunakan dan berapa jangka waktu kreditnya!
                                        </td>
                                        <td>
                                            @if($pdrb->md_besaranperbankans == null) -
                                            @else
                                                {{$pdrb->md_besaranperbankans->besaran}}
                                                - {{$pdrb->lamakredit}} {{'bulan'}}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Apakah anda memiliki usaha dibidang Industri?</td>
                                        <td>
                                            @if($industri->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- BIDANG INDUSTRI -->
                        @if($industri->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jenis
                                                Industri
                                                Makanan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jenis /
                                                Nama
                                                Produk
                                            </th>
                                            <th style="width: 5%;text-align: center; vertical-align: middle">Kapasitas
                                                Produksi / Bulan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Bahan Baku
                                                Utama
                                            </th>
                                            <th style="width: 5%;text-align: center; vertical-align: middle">Kebutuhan /
                                                Bulan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                Kulak /
                                                Satuan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Asal
                                                Suplier
                                                Bahan Baku
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Daerah
                                                Pemasaran Produk
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga Jual
                                                Produk
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Biaya
                                                Operasional Produksi / Bulan
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($industri as $ind)
                                            <tr>
                                                <td style="text-align:center;">{{$ind->md_jenisindustris->jenisindustri}}</td>
                                                <td style="text-align:center;">{{$ind->namaproduk}}</td>
                                                <td style="text-align:center;">{{$ind->produksiperbulan}} {{$ind->md_satuanproduks->satuan}}</td>
                                                <td style="text-align:center;">{{$ind->md_bahanbakus->bahanbaku}}</td>
                                                <td style="text-align:center;">{{$ind->kebutuhanperbulan}} {{$ind->md_satuanbahans->satuan}}</td>
                                                <td style="text-align:center;">{{$ind->hargakulakbahan}}
                                                    /{{$ind->md_satuankulaks->satuan}}</td>
                                                <td style="text-align:center;">{{$ind->md_supliers->suplier}}</td>
                                                <td style="text-align:center;"> @if($ind->pemasarandalamkabupaten == 'Ya')
                                                        Dalam Kabupaten <br>
                                                        @if($ind->pemasaranluarkabupaten == 'Ya') Luar Kabupaten <br>
                                                        @if($ind->pemasaranluarprovinsi == 'Ya') Luar Provinsi <br>
                                                        @if($ind->pemasaranluarnegeri == 'Ya') Luar Negeri <br>
                                                        @endif
                                                        @endif
                                                        @endif
                                                    @endif
                                                </td>
                                                <td style="text-align:center;">{{$ind->hargajualproduk}}</td>
                                                <td style="text-align:center;">{{$ind->operasionalperbulan}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                        @endif

                    <!-- BIDANG PERDAGANGAN -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 2%; vertical-align: middle">10</td>
                                        <td style="width: 65%; vertical-align: middle">Apakah anda memiliki usaha
                                            dibidang Perdagangan?
                                        </td>
                                        <td style="width: 38%; vertical-align: middle">
                                            @if($perdagangan->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if($perdagangan->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Jenis
                                                Usaha Perdagangan
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Produk
                                                Unggulan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jumlah
                                                Kulak / Bulan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                Kulak Produk
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga Jual
                                                Produk
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Tempat
                                                Kulak Barang
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Nama Toko
                                                / Suplier
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Konsumen
                                                Terbanyak
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($perdagangan as $dagang)
                                            <tr>
                                                <td style="text-align:center;">{{ $dagang->md_jenisusahadagangs ? $dagang->md_jenisusahadagangs->jenisusahadagang : 'kondisi' }}</td>
                                                <td style="text-align:center;">{{$dagang->produkunggulan}}</td>
                                                <td style="text-align:center;">{{$dagang->jumlahkulakperbulan}} {{$dagang->md_satuankulaks->satuan}}</td>
                                                <td style="text-align:center;">{{$dagang->hargakulak}}
                                                    /{{$dagang->md_satuankulaks->satuan}}</td>
                                                <td style="text-align:center;">{{$dagang->hargajual}}
                                                    /{{$dagang->md_satuanjuals->satuan}}</td>
                                                <td style="text-align:center;">{{$dagang->md_supliers->suplier}}</td>
                                                <td style="text-align:center;">{{$dagang->namasuplier}}</td>
                                                @foreach($kepemilikandagang as $kpdagang)
                                                    <td style="text-align:center;"> @if($kpdagang->konsumendalamkecamatan == 'Ya')
                                                            Dalam Kecamatan <br>
                                                            @if($kpdagang->konsumendalamkabupaten == 'Ya') Dalam
                                                            Kabupaten <br>
                                                            @if($kpdagang->konsumenluarkabupaten == 'Ya') Luar Kabupaten
                                                            <br>
                                                            @if($kpdagang->konsumenluarprovinsi == 'Ya') Luar Provinsi
                                                            <br>
                                                            @endif
                                                            @endif
                                                            @endif
                                                        @endif
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                        @endif

                    <!-- BIDANG PERTANIAN -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 2%; vertical-align: middle">11</td>
                                        <td style="width: 65%; vertical-align: middle">Apakah anda memiliki usaha
                                            dibidang Pertanian?
                                        </td>
                                        <td style="width: 38%; vertical-align: middle">
                                            @if($garapanpertanian->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if($garapanpertanian->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Jenis
                                                Tanaman
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Luas Tanam
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Masa Tanam
                                                Pertama
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Masa Tanam
                                                Selanjutnya
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kebutuhan
                                                Bibit
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                Bibit
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kapasitas
                                                Panen / Periode
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Panen /
                                                tahun
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">
                                                Operasional / Periode Tanam
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($garapanpertanian as $garaptani)
                                            <tr>
                                                <td style="text-align:center;">{{$garaptani->md_jenistanamans->jenistanaman}}</td>
                                                <td style="text-align:center;">{{$garaptani->luastanam}}
                                                    /{{$garaptani->md_satuanluass->satuan}}</td>
                                                <td style="text-align:center;">@if($garaptani->bulantanam == 1) Januari
                                                    @elseif($garaptani->bulantanam == 2) Februari
                                                    @elseif($garaptani->bulantanam == 3) Maret
                                                    @elseif($garaptani->bulantanam == 4) April
                                                    @elseif($garaptani->bulantanam == 5) Mei
                                                    @elseif($garaptani->bulantanam == 6) Juni
                                                    @elseif($garaptani->bulantanam == 7) Juli
                                                    @elseif($garaptani->bulantanam == 8) Agustus
                                                    @elseif($garaptani->bulantanam == 9) September
                                                    @elseif($garaptani->bulantanam == 10) Oktober
                                                    @elseif($garaptani->bulantanam == 11) November
                                                    @elseif($garaptani->bulantanam == 12) Desember
                                                    @endif
                                                </td>
                                                <td style="text-align:center;">@if($garaptani->bulantanamselanjutnya == 1)
                                                        Januari
                                                    @elseif($garaptani->bulantanamselanjutnya == 2) Februari
                                                    @elseif($garaptani->bulantanamselanjutnya == 3) Maret
                                                    @elseif($garaptani->bulantanamselanjutnya == 4) April
                                                    @elseif($garaptani->bulantanamselanjutnya == 5) Mei
                                                    @elseif($garaptani->bulantanamselanjutnya == 6) Juni
                                                    @elseif($garaptani->bulantanamselanjutnya == 7) Juli
                                                    @elseif($garaptani->bulantanamselanjutnya == 8) Agustus
                                                    @elseif($garaptani->bulantanamselanjutnya == 9) September
                                                    @elseif($garaptani->bulantanamselanjutnya == 10) Oktober
                                                    @elseif($garaptani->bulantanamselanjutnya == 11) November
                                                    @elseif($garaptani->bulantanamselanjutnya == 12) Desember
                                                    @endif

                                                </td>
                                                <td style="text-align:center;">{{$garaptani->kebutuhanbibit}} {{$garaptani->md_satuanbibits->satuan}}</td>
                                                <td style="text-align:center;">{{$garaptani->hargabibit}}
                                                    / {{$garaptani->md_satuanbibits->satuan}}</td>
                                                <td style="text-align:center;">{{$garaptani->kapasitaspanen}} ton</td>
                                                <td style="text-align:center;">{{$garaptani->panenpertahun}} kali</td>
                                                <td style="text-align:center;">Rp.{{$garaptani->operasionaltanam}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">12</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara anda mengelola
                                                usaha pertanian anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->statuspengelolaan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">13</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara anda
                                                memeperoleh bibit?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->statuspembibitan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">14</td>
                                            <td style="width: 65%; vertical-align: middle">Jika membeli, Sebutkan Nama
                                                Toko, Desa / Kelurahan!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle"> {{$pertanian->namasuplier}}
                                                -
                                                @if($pertanian->desasuplier === null)
                                                @else {{$pertanian->desasuplier->namadesa}}
                                                @endif </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">15</td>
                                            <td style="width: 65%; vertical-align: middle">Berapa kebutuhan Pupuk
                                                Organik untuk usaha pertanian anda? sebutkan jenisnya!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->kebutuhanpupukorganik}}
                                                Kg - Jenis: {{$pertanian->jenispupukorganik}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">16</td>
                                            <td style="width: 65%; vertical-align: middle">Berapa kebutuhan Pupuk
                                                Anorganik untuk usaha pertanian anda? sebutkan jenisnya!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->kebutuhanpupukanorganik}}
                                                Kg - Jenis: {{$pertanian->jenispupukanorganik}} </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">17</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara anda
                                                memperoleh pupuk?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->sumberpupuk}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">18</td>
                                            <td style="width: 65%; vertical-align: middle">Jika membuat sendiri,
                                                sebutkan apa saja yang dibuat?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle"> @if($pertanian->pupukbuatan === null)
                                                    -
                                                @else {{$pertanian->pupukbuatan}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">19</td>
                                            <td style="width: 65%; vertical-align: middle">Jika membeli, sebutkan nama
                                                toko dan Desa/Kelurahan?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->namakios}} -
                                                @if($pertanian->desakios == null)
                                                @else {{$pertanian->desakios->namadesa}}
                                                @endif </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">20</td>
                                            <td style="width: 65%; vertical-align: middle">Sebutkan sumber irigasi dari
                                                usaha pertanian / perkebunan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->sumberirigasi}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">21</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana model penjualan
                                                hasil panen anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->modelpenjualan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">22</td>
                                            <td style="width: 65%; vertical-align: middle">Jika anda mengijonkan
                                                (tebasan), berapa nilai ijon per luasan?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">@if($pertanian->hargaijon === null)
                                                    -
                                                @else {{$pertanian->hargaijon}}
                                                    / {{$pertanian->luasanijon}} {{$pertanian->satuanijon}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">23</td>
                                            <td style="width: 65%; vertical-align: middle">Kepada siapa anda menjual
                                                hasil produksi pertanian / perkebunan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->pemasaranhasil}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">24</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana anda mengolah
                                                limbah produksi pertanian / perkebunan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$pertanian->pengolahanlimbah}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">25</td>
                                            <td style="width: 65%; vertical-align: middle">Jika diolah, sebutkan untuk
                                                apa?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle"> @if($pertanian->jenisolahanlimbah === null)
                                                    -
                                                @else {{$pertanian->jenisolahanlimbah}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">26</td>
                                            <td style="width: 65%; vertical-align: middle">Jika dijual, sebutkan berapa
                                                kapasitas limbah per bulan? <br>
                                                Harga jual limbah tanpa diolah?<br>
                                                Harga jual hasil olahan limbah?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">@if($pertanian->kapasitaslimbahperpanen === null)
                                                    - <br> - <br> -
                                                @else
                                                    {{$pertanian->kapasitaslimbahperpanen}} <br>
                                                    {{$pertanian->hargasebelumolah}} <br>
                                                    {{$pertanian->hargasesudaholah}}</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">27</td>
                                            <td style="width: 65%; vertical-align: middle">Sebutkan jenis sarana
                                                prasarana produksi pertanian (saprodi) yang anda miliki!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @php($no=1)
                                                @foreach($kepemilikansaprodi as $saprodi)
                                                    {{$no}}{{'. '}}{{$saprodi->md_saprodis->namasaprodi}} <br>
                                                    @php($no++)
                                                @endforeach</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                        @endif

                    <!-- BIDANG PETERNAKAN -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 2%; vertical-align: middle">28</td>
                                        <td style="width: 65%; vertical-align: middle">Apakah anda memiliki usaha
                                            dibidang Peternakan?
                                        </td>
                                        <td style="width: 38%; vertical-align: middle">
                                            @if($pengelolaanternak->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if($pengelolaanternak->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Jenis
                                                Ternak
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">Status
                                                kepemilikan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jumlah
                                                ternak yang dikelola
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                bibit ternak / ekor
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga jual
                                                ternak / ekor
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga jual
                                                hasil peternakan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kapasitas
                                                produksi ternak / tahun
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kapasitas
                                                produksi hasil peternakan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Periode
                                                produksi hasil peternakan / tahun
                                            </th>
                                            <th style="width: 15%;text-align: center; vertical-align: middle">
                                                Operasional produksi / periode produksi
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pengelolaanternak as $ternak)
                                            <tr>
                                                <td style="text-align:center;">{{$ternak->md_jenisternaks->jenisternak}}</td>
                                                <td style="text-align:center;">{{$ternak->statuskepemilikan}}</td>
                                                <td style="text-align:center;">{{$ternak->jumlahternak}} ekor</td>
                                                <td style="text-align:center;">Rp.{{$ternak->hargabibitternak}}</td>
                                                <td style="text-align:center;">Rp.{{$ternak->hargajualternak}}</td>
                                                <td style="text-align:center;">
                                                    Rp.{{$ternak->hargajualhasilpeternakan}}</td>
                                                <td style="text-align:center;">{{$ternak->kapasitasproduksipertahun}}
                                                    ekor
                                                </td>
                                                <td style="text-align:center;">{{$ternak->kapasitashasilternakperperiode}} {{$ternak->md_satuanhasils->satuan}} </td>
                                                <td style="text-align:center;">{{$ternak->periodepertahun}} kali</td>
                                                <td style="text-align:center;">
                                                    Rp.{{$ternak->operasionalperproduksi}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">29</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara anda mengelola
                                                usaha peternakan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->statuspengelolaan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">30</td>
                                            <td style="width: 65%; vertical-align: middle">Jika dikelola orang lain,
                                                siapa pemilik kandang ternak?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->kepemilikankandang}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">31</td>
                                            <td style="width: 65%; vertical-align: middle">Apakah peruntukan ternak yang
                                                anda kelola?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->peruntukanternak}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">32</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara memperoleh
                                                pakan ternak?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->sumberpakanternak}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">33</td>
                                            <td style="width: 65%; vertical-align: middle">Jika membeli, sebutkan nama
                                                toko dan Desa/Kelurahan!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->namasuplier}}
                                                -
                                                @if($peternakan->desa == null)
                                                @else {{$peternakan->desa->namadesa}}
                                                @endif </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">34</td>
                                            <td style="width: 65%; vertical-align: middle">Pernahkan ternak anda
                                                terserang penyakit?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->statusterserangpenyakit}}
                                                @if($peternakan->md_penyakitternaks == null)
                                                @else - {{$peternakan->md_penyakitternaks->penyakitternak}}
                                                @endif </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">35</td>
                                            <td style="width: 65%; vertical-align: middle">Kemana penjualan hasil
                                                produksi peternakan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->pemasaranhasilproduksi}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">36</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana anda mengelola
                                                limbah hasil peternakan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$peternakan->pengolahanlimbah}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">37</td>
                                            <td style="width: 65%; vertical-align: middle">Jika dijual, sebutkan berapa
                                                kapasitas limbah perbulan? <br>
                                                Berapa harga jual limbah tanpa diolah? <br>
                                                Berapa harga jual hasil olahan limbah?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">@if($peternakan->kapasitaslimbahperbulan === null)
                                                    - <br> - <br> -
                                                @else {{$peternakan->kapasitaslimbahperbulan}}
                                                    <br> {{$peternakan->hargasebelumolah}}
                                                    <br> {{$peternakan->hargasetelaholah}}
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">38</td>
                                            <td style="width: 65%; vertical-align: middle">Jika diolah. sebutkan untuk
                                                apa pengolahan limbah ternak anda? Kapasitas Produksi perbulan dan harga
                                                jualnya?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @if ($pengolahanlimbahternak->isEmpty()) -
                                                @else
                                                    @foreach($pengolahanlimbahternak as $limbah)
                                                        {{$limbah->md_limbahternaks->limbahternak}}
                                                        - {{$limbah->kapasitasperbulan}} {{$limbah->md_satuanlimbahs->satuan}}
                                                        /bulan   - Rp.{{$limbah->hargajual}}
                                                        /{{$limbah->md_satuanlimbahs->satuan}}<br>
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">39</td>
                                            <td style="width: 65%; vertical-align: middle">Jenis pakan ternak yang
                                                digunakan? kebutuhan perhari dan harganya?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @foreach($penggunaanpakanternak as $pakan)
                                                    {{$pakan->md_jenispakanternaks->jenispakanternak}}
                                                    - {{$pakan->kebutuhanperhari}} {{$pakan->md_satuanpakans->satuan}}
                                                    /hari - Rp.{{$pakan->hargapakan}}
                                                    /{{$pakan->md_satuanpakans->satuan}} <br>
                                                @endforeach
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                        @endif
                    <!-- BIDANG PERIKANAN -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="width: 2%; vertical-align: middle">40</td>
                                        <td style="width: 65%; vertical-align: middle">Apakah anda memiliki usaha
                                            dibidang Perikanan?
                                        </td>
                                        <td style="width: 38%; vertical-align: middle">
                                            @if($budidayaikan->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if($budidayaikan->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jenis ikan
                                                Budidaya
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Luasan
                                                Budidaya
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                bibit ikan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga jual
                                                hasil produksi
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Tanggal
                                                tebar benih
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Tanggal
                                                perkiraan panen
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kapasitas
                                                produksi / tahun
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Periode
                                                produksi / tahun
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">
                                                Operasional produksi / periode produksi
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jenis
                                                pakan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Kebutuhan
                                                pakan / hari
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Harga
                                                pakan
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($budidayaikan as $ikan)
                                            <tr>
                                                <td style="text-align:center;">{{$ikan->md_jenisikanbudidayas->jenisikan}}</td>
                                                <td style="text-align:center;">{{$ikan->luaskolam}} {{$ikan->satuanluass->satuan}}</td>
                                                <td style="text-align:center;">{{$ikan->hargabibit}}
                                                    /{{$ikan->satuanbibits->satuan}}</td>
                                                <td style="text-align:center;">Rp.{{$ikan->hargajual}}
                                                    /{{$ikan->satuanjuals->satuan}}</td>
                                                <td style="text-align:center;">{{$ikan->tanggaltebar}}</td>
                                                <td style="text-align:center;">{{$ikan->tanggalpanen}}</td>
                                                <td style="text-align:center;">{{$ikan->kapasitasperpanen}} ton</td>
                                                <td style="text-align:center;">{{$ikan->panenpertahun}} kali</td>
                                                <td style="text-align:center;">Rp.{{$ikan->biayaproduksi}}</td>
                                                <td style="text-align:center;">{{$ikan->md_jenispakanikans->jenispakanikan}}</td>
                                                <td style="text-align:center;">{{$ikan->kebutuhanpakanperhari}} {{$ikan->satuanpakans->satuan}}
                                                    /hari
                                                </td>
                                                <td style="text-align:center;">Rp.{{$ikan->hargapakan}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">41</td>
                                            <td style="width: 65%; vertical-align: middle">Bagaimana cara anda
                                                memperoleh pakan?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$perikanan->perolehanpakan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">42</td>
                                            <td style="width: 65%; vertical-align: middle">Jika membeli, sebutkan nama
                                                toko dan Dsa/Kelurahan!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @if($perikanan->idsuplier === null) -
                                                @else  {{$perikanan->md_supliers->suplier}}
                                                - {{$perikanan->namasuplier}}
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">43</td>
                                            <td style="width: 65%; vertical-align: middle">Apakah ada pengelolaan
                                                lanjutan dari budidaya ikan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">{{$perikanan->olahanlanjutan}}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">44</td>
                                            <td style="width: 65%; vertical-align: middle">Jika diolah, sebutkan untuk
                                                apa? Berapa kapasitas produksi perbulan dan harga jualnya!
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">@if($perikanan->namaolahan === null)
                                                    -
                                                @else {{$perikanan->namaolahan}}
                                                    - {{$perikanan->produksiperbulan}} {{$perikanan->md_satuanproduksis->satuan}}
                                                    - Rp.{{$perikanan->hargajual}}
                                                    /{{$perikanan->md_satuanjuals->satuan}}
                                                @endif</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">45</td>
                                            <td style="width: 65%; vertical-align: middle">Kemana pemasaran hasil
                                                produksi / olahan?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @if($perikanan->pemasarandalamkabupaten == 'Ya') Dalam Kabupaten
                                                @endif
                                                @if($perikanan->pemasaranluarkabupaten == 'Ya'), Luar Kabupaten
                                                @endif
                                                @if($perikanan->pemasaranluarprovinsi == 'Ya'), Luar Provinsi
                                                @endif
                                                @if($perikanan->pemasaranluarnegeri == 'Ya'), Luar Negeri
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">46</td>
                                            <td style="width: 65%; vertical-align: middle">Bila anda bergerak dibidang
                                                perikanan tangkap, jenis ikan apa yang dominan anda tangkap dan berapa
                                                perkiraan kapasitas penangkapan dalam satu hari?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @if($perikanantangkap->isEmpty()) -
                                                @else
                                                    @php($it=1)
                                                    @foreach ($perikanantangkap as $ikantangkap)
                                                        {{$it}} {{'. '}} {{$ikantangkap->md_jenisikantangkaps->jenisikan}}
                                                        - {{$ikantangkap->kapasitasperhari}} Kg /hari
                                                        @php($it++)
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 2%; vertical-align: middle">47</td>
                                            <td style="width: 65%; vertical-align: middle">Kemana pemasaran utama ikan
                                                hasil tangkapan anda?
                                            </td>
                                            <td style="width: 38%; vertical-align: middle">
                                                @if($perikanantangkap->isEmpty()) -
                                                @else
                                                    @php($ik=1)
                                                    @foreach ($perikanantangkap as $ikantangkap)
                                                        {{$ik}} {{'. '}} {{$ikantangkap->md_jenisikantangkaps->jenisikan}}
                                                        -
                                                        @if($ikantangkap->pemasarandalamkabupaten == 'Ya') Dalam
                                                        Kabupaten
                                                        @endif
                                                        @if($ikantangkap->pemasaranluarkabupaten == 'Ya'), Luar
                                                        Kabupaten
                                                        @endif
                                                        @if($ikantangkap->pemasaranluarprovinsi == 'Ya'), Luar Provinsi
                                                        @endif
                                                        @if($ikantangkap->pemasaranluarnegeri == 'Ya'), Luar Negeri
                                                        @endif
                                                        @php($ik++)
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                        @endif
                    <!-- BIDANG JASA -->
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td style="width: 2%; vertical-align: middle">48</td>
                                        <td style="width: 65%; vertical-align: middle">Apakah anda memiliki usaha
                                            dibidang jasa?
                                        </td>
                                        <td style="width: 38%; vertical-align: middle">
                                            @if($jasa->isEmpty()) Tidak
                                            @else Ya
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        @if($jasa->isEmpty())
                        @else
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Jenis
                                                Usaha Jasa
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Rata-rata
                                                Konsumen / minggu
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Rata-rata
                                                Penghasilan / bulan
                                            </th>
                                            <th style="width: 10%;text-align: center; vertical-align: middle">Konsumen
                                                Utama
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jasa as $jas)
                                            <tr>
                                                <td style="text-align:center;">{{$jas->jenisjasa}}</td>
                                                <td style="text-align:center;">{{$jas->konsumenperminggu}} orang</td>
                                                <td style="text-align:center;">Rp.{{$jas->brutoperbulan}}</td>
                                                <td style="text-align:center;">
                                                    @if($jas->konsumendalamkabupaten == 'Ya') Dalam Kabupaten <br>
                                                    @if($jas->konsumenluarkabupaten == 'Ya') Luar Kabupaten <br>
                                                    @if($jas->konsumenluarprovinsi == 'Ya') Luar Provinsi <br>
                                                    @if($jas->konsumenluarnegeri == 'Ya') Luar Negeri
                                                    @endif
                                                    @endif
                                                    @endif
                                                    @endif
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                    @endif

                    <!-- BARISAN PALING BAWAH -->
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <!-- <a href="kuesioner-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print </a> -->
                                <button type="button" class="btn btn-success float-right"><i class="fas fa-print"></i>
                                    Print Kuesioner
                                </button>
                                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

