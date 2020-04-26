<!-- Kuesioner Bidang Pertanian -->

<div class="form-group">
    <label for="inputDescription">14. Apakah anda memiliki kegiatan dibidang pertanian?</label>
    <div class="col-md-1">
        <input class="form-group" name="pertanian" id="pertanian" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="pertanian" id="pertanian" value="0" class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>
<div class="form-group">
    <label for="inputDescription">Jika Ya, silahkan jawab pertanyaan no.15 sampai dengan no.30!</label>
    <br>
    <label for="inputDescription">Jika Tidak, silahkan lanjutkan kebidang selanjutnya tanpa menekan tombol
        simpan!</label>
</div>

<div class="form-group">
    <label for="inputDescription">15. Isikan informasi jenis komoditas tanaman pertanian/perkebunan/hortikultura yang
        sedang anda kerjakan: (bisa mengisi lebih dari satu)</label>
</div>
<div class="col-12">
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 500px;">
            <table class="table table-head-fixed text-nowrap">
                <thead>
                <tr>
                    <th>Jenis Tanaman</th>
                    <th>Luas Tanaman</th>
                    <th>Satuan Luas Tanam</th>
                    <th>Masa Tanam Pertama</th>
                    <th>Masa Tanam Berikutnya</th>
                    <th>Kebutuhan Bibit/Masa Tanam</th>
                    <th>Satuan Bibit</th>
                    <th>Harga Beli Bibit/Satuan</th>
                    <th>Kapasitas/Panen (ton)</th>
                    <th>Jumlah Panen/Tahun (kali)</th>
                    <th>Biaya Operasional/Periode Tanam</th>

                </tr>
                </thead>
                <tbody>
                @foreach($jenistanaman as $tanaman)
                    <tr>
                        <td>
                            <input name="jenistanaman{{$tanaman->id}}" id="JT{{$tanaman->id}}" value="{{$tanaman->id}}"
                                   class="form-group-input" type="checkbox">
                            <label for="JT{{$tanaman->id}}"
                                   class="form-check-label">{{$tanaman->id}}{{'. '}}{{$tanaman->jenistanaman}}</label>
                        </td>
                        <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                        </td>
                        <td>{{ Form::select('id',array('1' => 'Petak', '2' => 'Ereng', '3' => 'M2','4' => 'Ha'),null,['class'=>'form-control select2','id' => 'id']) }}
                        </td>
                        <td>{{ Form::select('id',array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                      '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','id' => 'id']) }}
                        </td>
                        <td>{{ Form::select('id',array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                      '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','id' => 'id']) }}
                        </td>
                        <td>
                            {{ Form::text('aspek',null,[
                                      'class'=>'form-control',
                                      'id' => 'aspek'
                                  ]) }}
                        </td>
                        <td>
                            {{ Form::select('id',$satuan,null,[
                                  'class'=>'form-control select2',
                                  'id' => 'id'
                                  ]) }}
                        </td>
                        <td>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                            </div>
                        </td>
                        <td>
                            {{ Form::text('aspek',null,[
                                      'class'=>'form-control',
                                      'id' => 'aspek'
                                  ]) }}</td>
                        <td>
                            {{ Form::text('aspek',null,[
                                      'class'=>'form-control',
                                      'id' => 'aspek'
                                  ]) }}</td>
                        <td>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <div class="input-group">
                            <input name="jenistanaman{{$tanaman->id}}" id="jenistanaman{{$tanaman->id}}"
                                   value="{{$tanaman->id}}"
                                   class="form-group-input" type="checkbox">
                            {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                        </div>
                    </td>
                    <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                    </td>
                    <td>{{ Form::select('id',array('1' => 'Petak', '2' => 'Ereng', '3' => 'M2','4' => 'Ha'),null,['class'=>'form-control select2','id' => 'id']) }}
                    </td>
                    <td>{{ Form::select('id',array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                      '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','id' => 'id']) }}
                    </td>
                    <td>{{ Form::select('id',array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                      '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','id' => 'id']) }}
                    </td>
                    <td>
                        {{ Form::text('aspek',null,[
                                  'class'=>'form-control',
                                  'id' => 'aspek'
                              ]) }}
                    </td>
                    <td>
                        {{ Form::select('id',$satuan,null,[
                              'class'=>'form-control select2',
                              'id' => 'id'
                              ]) }}
                    </td>
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                            ]) }}
                        </div>
                    </td>
                    <td>
                        {{ Form::text('aspek',null,[
                                  'class'=>'form-control',
                                  'id' => 'aspek'
                              ]) }}</td>
                    <td>
                        {{ Form::text('aspek',null,[
                                  'class'=>'form-control',
                                  'id' => 'aspek'
                              ]) }}</td>
                    <td>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                            ]) }}
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<div class="form-group">
    <label for="inputProjectLeader">16. Bagaimana cara anda mengelola usaha pertanian anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dikelola sendiri (dengan atau tanpa pekerja)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dikelola orang lain (sistem kerjasama/bagi hasil/disewakan,dsb)</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">17. Bagaimana cara anda memperoleh bibit?</label>
    <div class="col-md-12">
        <input class="form-group" name="bibit" id="bibit" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Membuat sendiri (menyemai)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="bibit" id="bibit" value="2" class="form-check-input" type="radio">
        <label class="form-check-label">Membeli</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">18. Jika membeli, Sebutkan :</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Suplier</label>
                    <div class="col-md-8">
                        {{ Form::text('aspek',null,[
                        'class'=>'form-control',
                        'id' => 'aspek'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Desa/Kelurahan</label>
                    <div class="col-sm-6">
                        {{ Form::select('id',$desa,null,[
                            'class'=>'form-control select2',
                            'id' => 'id'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">19. Kebutuhan Pupuk :</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Pupuk
                        Organik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                            <div class="input-group-append">
                                {{ Form::select('id',$satuan,null,[
                                'class'=>'form-control select2',
                                'id' => 'id'
                                ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Jenisnya</label>
                    <div class="col-sm-6">
                        {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Pupuk Anorganik&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                            <div class="input-group-append">
                                {{ Form::select('id',$satuan,null,[
                                'class'=>'form-control select2',
                                'id' => 'id'
                                ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Jenisnya</label>
                    <div class="col-sm-6">
                        {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">20. Bagaimana cara anda memperoleh pupuk?</label>
    <div class="col-md-12">
        <input class="form-group" name="pupuk" id="pupuk" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Membeli</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pupuk" id="pupuk" value="2" class="form-check-input" type="radio">
        <label class="form-check-label">Membuat sendiri</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">21. Jika membuat sendiri sebutkan apa saja yang dibuat?</label>
    <div class="col-md-12">
        {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">22. Jika membeli. sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Kios Pupuk&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-8">

                        {{ Form::text('aspek',null,[
                        'class'=>'form-control',
                        'id' => 'aspek'
                        ]) }}

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Desa/Kelurahan</label>
                    <div class="col-sm-6">
                        {{ Form::select('id',$desa,null,[
                            'class'=>'form-control select2',
                            'id' => 'id'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">23. Darimana sumber irigasi untuk usaha pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi" value="1" class="form-check-input"
               type="radio">
        <label class="form-check-label">Sumur Bor</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi" value="2" class="form-check-input"
               type="radio">
        <label class="form-check-label">Irigasi Pertanian</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi" value="3" class="form-check-input"
               type="radio">
        <label class="form-check-label">Sumberan</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">24. Bagaimana model penjualan hasil panen anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="modelpenjualan" id="modelpenjualan" value="1" class="form-check-input"
               type="radio">
        <label class="form-check-label">Diijonkan (sebelum panen)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="modelpenjualan" id="modelpenjualan" value="2" class="form-check-input"
               type="radio">
        <label class="form-check-label">Diolah menjadi bahan baku setengah jadi (contoh: gabah,bongol
            jagung,dsb)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="modelpenjualan" id="modelpenjualan" value="3" class="form-check-input"
               type="radio">
        <label class="form-check-label">Diolah menjadi barang siap konsumsi (contoh: beras, jagung, pipil, dsb)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="modelpenjualan" id="modelpenjualan" value="4" class="form-check-input"
               type="radio">
        <label class="form-check-label">Dijual ketengkulak (saat panen)</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">25. Jika anda mengijonkan (tebasan), sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nilai ijon sesuai luasan tanam&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label>Untuk</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                                ]) }}
                            <div class="input-group-append">
                                {{ Form::select('id',array('1' => 'Petak', '2' => 'Ereng', '3' => 'M2','4' => 'Ha'),null,['class'=>'form-control select2','id' => 'id']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">26. Kepada siapa anda menjual hasil produksi pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Pengijon dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="2" class="form-check-input" type="radio">
        <label class="form-check-label">Pengijon luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="3" class="form-check-input" type="radio">
        <label class="form-check-label">Tengkulak dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="4" class="form-check-input" type="radio">
        <label class="form-check-label">Tengkulak luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="5" class="form-check-input" type="radio">
        <label class="form-check-label">Toko/Pedagang/Pasar dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="6" class="form-check-input" type="radio">
        <label class="form-check-label">Toko/Pedagang/Pasar luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli" value="7" class="form-check-input" type="radio">
        <label class="form-check-label">Industri (contoh:selep)</label>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">27. Bagaimana anda mengolah limbah produksi pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="limbah" id="limbah" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Dibuang/Dibakar</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="limbah" id="limbah" value="2" class="form-check-input" type="radio">
        <label class="form-check-label">Diolah</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="limbah" id="limbah" value="3" class="form-check-input" type="radio">
        <label class="form-check-label">Dijual</label>
    </div>

</div>
<div class="form-group">
    <label for="inputProjectLeader">28. Jika diolah, sebutkan untuk apa?</label>
    <div class="col-md-12">
        {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">29. Jika dijual, sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Kapasitas Limbah&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            {{ Form::text('aspek',null,[
                            'class'=>'form-control',
                            'id' => 'aspek'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg/Bulan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Harga jual limbah tanpa diolah</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                                ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">/Kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Harga jual hasil olahan</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                                ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">/Kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">30. Pilihlah jenis sarana prasarana produksi pertanian (saprodi) pertanian yang
        dimiliki (bisa memilih lebih dari satu pilihan)</label>
    <div class="row">
        @foreach($jenissaprodi as $saprodi)
            <div class="form-check col-lg-6">
                <div class="row">
                    <div class="col-md-7">
                        <input name="idjenisaprodi{{$saprodi->id}}" id="sap{{$saprodi->id}}" value="{{$saprodi->id}}"
                               class="form-group-input" type="checkbox">
                        <label for="sap{{$saprodi->id}}" class="form-check-label">{{$saprodi->namasaprodi}}</label>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
