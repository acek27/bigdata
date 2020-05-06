@extends('layouts.master')
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
                                    <small class="float-right">Date: 5/5/2020</small>
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
                                            @php($i=1)
                                            @foreach($pekerjaantambahan as $pekerjaan)
                                                {{$i}}{{'. '}}{{$pekerjaan->md_bidangusahapekerjaans->bidangusaha}}
                                                - {{$pekerjaan->md_statuspekerjaans->statuspekerjaan}} <br>
                                                @php($i++)
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sebutkan Aset usaha apa saja yang anda miliki saat ini? sebutkan
                                            jumlahnya!
                                        </td>
                                        <td>
                                            @php($i=1)
                                            @foreach($asetusaha as $aset)
                                                {{$i}}{{'. '}}{{$aset->md_asetusahas->asetusaha}}
                                                - {{$aset->jumlahaset}} {{$aset->md_asetusahas->satuan}} <br>
                                                @php($i++)
                                            @endforeach
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
                                            @php($i=1)
                                            @foreach($hasiltambahan as $sda)
                                                {{$i}}{{'. '}}{{$sda->namasumberdaya}} - Panen {{$sda->panenpertahun}}
                                                x/tahun - Rp.{{$sda->hasilperpanen}}/panen <br>
                                                @php($i++)
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Berapa rata-rata total penghasilan kepala rumah tangga beserta seluruh
                                            anggota rumah tangga yang bekerja dalam satu bulan
                                        </td>
                                        <td>Rp.{{$pdrb->pendapatanperbulan}}</td>
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
                                            @php($i=1)
                                            @foreach($perbankan as $bank)
                                                {{$i}}{{'. '}}{{$bank->md_perbankans->jenisperbankan}}
                                                - {{$bank->namabank}} - {{$bank->cabang}}
                                                @php($i++)
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Berapa besaran kredit yang anda gunakan dan berapa jangka waktu kreditnya!
                                        </td>
                                        <td>{{$pdrb->idbesarankredit}} - {{$pdrb->lamakredit}} {{'bulan'}}</td>
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


                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Jenis Industri
                                            Makanan
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Jenis / Nama
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
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Harga Kulak /
                                            Satuan
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Asal Suplier
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

                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 15%;text-align: center; vertical-align: middle">Jenis Usaha
                                            Perdagangan
                                        </th>
                                        <th style="width: 15%;text-align: center; vertical-align: middle">Produk
                                            Unggulan
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Jumlah Kulak /
                                            Bulan
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Harga Kulak
                                            Produk
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Harga Jual
                                            Produk
                                        </th>
                                        <th style="width: 15%;text-align: center; vertical-align: middle">Tempat Kulak
                                            Barang
                                        </th>
                                        <th style="width: 10%;text-align: center; vertical-align: middle">Nama Toko /
                                            Suplier
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
                                            <td style="text-align:center;"> @if($dagang->konsumendalamkabupaten == 1)
                                                    Dalam Kabupaten <br>
                                                    @if($dagang->konsumenluarkabupaten == 1) Luar Kabupaten <br>
                                                    @if($dagang->konsumenluarprovinsi == 1) Luar Provinsi <br>
                                                    @if($dagang->konsumenluarnegeri == 1) Luar Negeri <br>
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
                        <!-- /.row -->
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

