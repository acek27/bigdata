<!-- Kuesioner Bidang Peternakan-->

<div class="form-group">
    <label for="inputDescription">35. Apakah anda memiliki kegiatan dibidang peternakan?</label>
    <div class="col-md-1">
        <input onclick="checkpeternakan(this.value)" class="form-group" name="peternakan" id="peternakan" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkpeternakan(this.value)" class="form-group" name="peternakan" id="peternakan" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
</div>
<div id="divpeternakan">
    <div class="form-group">
        <label for="inputDescription">36. Isikan informasi jenis komoditas peternakan / hasil peternakan yang sedang
            anda
            kerjakan: (bisa mengisi lebih dari satu)</label>
    </div>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis</th>
                        <th>Status Kepemilikan</th>
                        <th>Jumlah ternak yang dikelola</th>
                        <th>Harga bibit ternak per ekor</th>
                        <th>Harga jual ternak per ekor</th>
                        <th>Harga jual hasil peternakan</th>
                        <th>Satuan jual</th>
                        <th>Kapasitas produksi ternak per tahun</th>
                        <th>Kapasitas hasil produksi ternak per tahun</th>
                        <th>Periode produksi per tahun</th>
                        <th>Biaya Operasional per produksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i =1)
                    @foreach($jenisternak as $ternak)
                        <tr>
                            <td>
                                <input onclick="checkjenisternak()" name="idjenisternak{{$ternak->id}}"
                                       id="idjenisternak{{$ternak->id}}" value="{{$ternak->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idjenisternak{{$ternak->id}}"
                                       class="form-check-label">{{$ternak->id}}{{'. '}}{{$ternak->jenisternak}}</label>
                            </td>
                            <td id="col3{{$i}}" style="display: none">

                                {{ Form::select('statuskepemilikan'.$i, [
                                    '1' => 'Milik Sendiri',
                                    '2' => 'Menggaduh',
                                    '3' => 'Campuran'],null,[
                                'class'=>'form-control select2',
                                'placeholder' => 'Pilih',
                                'id' => 'satuanjual'.$i
                                ]) }}

                            </td>
                            <td id="col4{{$i}}"
                                style="display:none;">{{ Form::text('jumlahternak'.$i,null,['class'=>'form-control','id' => 'jumlahternak'.$i]) }}
                            </td>
                            <td id="col5{{$i}}" style="display:none;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargabibitternak'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargabibitternak'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="col6{{$i}}" style="display:none;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualternak'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualternak'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="col7{{$i}}" style="display:none;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hjhasilpeternakan'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hjhasilpeternakan'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="col8{{$i}}" style="display:none;">
                                {{ Form::select('satuanhasilpeternakan'.$i,$satuan,null,[
                                      'class'=>'form-control select2',
                                      'placeholder' => 'Pilih',
                                      'id' => 'satuanhasilpeternakan'.$i
                                      ]) }}
                            </td>
                            <td id="col9{{$i}}" style="display:none;">
                                {{ Form::text('kptahun'.$i,null,[
                                          'class'=>'form-control',
                                          'id' => 'kptahun'.$i
                                      ]) }}
                            </td>
                            <td id="col10{{$i}}" style="display:none;">
                                {{ Form::text('khternakperiode'.$i,null,[
                                          'class'=>'form-control',
                                          'id' => 'khternakperiode'.$i
                                      ]) }}</td>
                            <td id="col11{{$i}}" style="display:none;">
                                <div class="input-group">

                                    {{ Form::text('periodepertahun'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'periodepertahun'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
                                    </div>
                                </div>
                            </td>

                            <td id="col12{{$i}}" style="display:none;">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperproduksi'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionalperproduksi'.$i
                                    ]) }}
                                </div>
                            </td>
                        </tr>
                        @php($i++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisternak()" name="idjenisternak{{$i}}" id="idjenisternak{{$i}}"
                                       value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisternak'.$i,null,['disabled' =>'disabled','class'=>'form-control','id' => 'jenisternak'.$i,'placeholder'=>'Jenis Ternak']) }}
                            </div>
                        </td>
                        <td id="col3{{$i}}" style="display:none;">

                            {{ Form::select('statuskepemilikan'.$i, [
                                '1' => 'Milik Sendiri',
                                '2' => 'Menggaduh',
                                '3' => 'Campuran'],null,[
                            'class'=>'form-control select2',
                            'placeholder' => 'Pilih',
                            'id' => 'satuanjual'.$i
                            ]) }}

                        </td>
                        <td id="col4{{$i}}"
                            style="display:none;">{{ Form::text('jumlahternak'.$i,null,['class'=>'form-control','id' => 'jumlahternak'.$i]) }}
                        </td>
                        <td id="col5{{$i}}" style="display:none;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargabibitternak'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargabibitternak'.$i
                                ]) }}
                            </div>
                        </td>
                        <td id="col6{{$i}}" style="display:none;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargajualternak'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargajualternak'.$i
                                ]) }}
                            </div>
                        </td>
                        <td id="col7{{$i}}" style="display:none;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hjhasilpeternakan'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'hjhasilpeternakan'.$i
                                ]) }}
                            </div>
                        </td>
                        <td id="col8{{$i}}" style="display:none;">
                            {{ Form::select('satuanhasilpeternakan'.$i,$satuan,null,[
                                  'class'=>'form-control select2',
                                  'id' => 'satuanhasilpeternakan'.$i
                                  ]) }}
                        </td>
                        <td id="col9{{$i}}" style="display:none;">
                            {{ Form::text('kptahun'.$i,null,[
                                      'class'=>'form-control',
                                      'id' => 'kptahun'.$i
                                  ]) }}
                        </td>
                        <td id="col10{{$i}}" style="display:none;">
                            {{ Form::text('khternakperiode'.$i,null,[
                                      'class'=>'form-control',
                                      'id' => 'khternakperiode'.$i
                                  ]) }}</td>
                        <td id="col11{{$i}}" style="display:none;">
                            <div class="input-group">

                                {{ Form::text('periodepertahun'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'periodepertahun'.$i
                                ]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Kali</span>
                                </div>
                            </div>
                        </td>

                        <td id="col12{{$i}}" style="display:none;">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('operasionalperproduksi'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'operasionalperproduksi'.$i
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
        <label for="inputProjectLeader">37. Bagaimana cara anda mengelola usaha peternakan anda?</label>
        <div class="col-md-12">
            <input onclick="checkolahternak(this.value)" class="form-group" name="statuspengelolaan"
                   id="statuspengelolaan1" value="1"
                   class="form-check-input" type="radio" required>
            <label for="statuspengelolaan1" class="form-check-label">Dikelola sendiri</label>
        </div>
        <div class="col-md-12">
            <input onclick="checkolahternak(this.value)" class="form-group" name="statuspengelolaan"
                   id="statuspengelolaan2" value="2"
                   class="form-check-input" type="radio" required>
            <label for="statuspengelolaan2" class="form-check-label">Dikelola orang lain</label>
        </div>
        <div class="col-md-12">
            <input onclick="checkolahternak(this.value)" class="form-group" name="statuspengelolaan"
                   id="statuspengelolaan3" value="3"
                   class="form-check-input" type="radio" required>
            <label for="statuspengelolaan3" class="form-check-label">Dikelola secara komunal (tempat penitipan
                ternak)</label>
        </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">38. Jika dikelola orang lain, siapa pemilik kandang ternak?</label>
        <div class="col-md-12">
            <input class="form-group" name="kepemilikankandang" id="kepemilikankandang1" value="1"
                   class="form-check-input" type="radio" disabled="disabled">
            <label for="kepemilikankandang1" class="form-check-label">Pemilik ternak</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="kepemilikankandang" id="kepemilikankandang2" value="2"
                   class="form-check-input" type="radio" disabled="disabled">
            <label for="kepemilikankandang2" class="form-check-label">pengelola ternak</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="kepemilikankandang" id="kepemilikankandang3" value="3"
                   class="form-check-input" type="radio" disabled="disabled">
            <label for="kepemilikankandang3" class="form-check-label">Kandang komunal</label>
        </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">39. Apakah peruntukan ternak?</label>
        <div class="col-md-12">
            <input class="form-group" name="peruntukanternak" id="peruntukanternak1" value="1"
                   class="form-check-input" type="radio" required>
            <label for="peruntukanternak1" class="form-check-label">Pembibitan</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="peruntukanternak" id="peruntukanternak2" value="2"
                   class="form-check-input" type="radio" required>
            <label for="peruntukanternak2" class="form-check-label">Pembudidaya</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="peruntukanternak" id="peruntukanternak3" value="3"
                   class="form-check-input" type="radio" required>
            <label for="peruntukanternak4" class="form-check-label">Penggemukan</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="peruntukanternak" id="peruntukanternak4" value="4"
                   class="form-check-input" type="radio" required>
            <label for="peruntukanternak4" class="form-check-label">Dianakkan</label>
        </div>
        <div class="col-md-12">
            <input class="form-group" name="peruntukanternak" id="peruntukanternak5" value="5"
                   class="form-check-input" type="radio" required>
            <label for="peruntukanternak5" class="form-check-label">Dijual hidup</label>
        </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">40. Bagaimana cara memperoleh pakan ternak?</label>
        <div class="col-md-12">
            <input onclick="checkperolehanpakanternak(this.value)" class="form-group" name="sumberpakanternak"
                   id="sumberpakanternak1" value="1"
                   class="form-check-input" type="radio" required>
            <label for="sumberpakanternak1" class="form-check-label">Mempunyai lahan hijauan pakan ternak (HPT)
                sendiri</label>
        </div>
        <div class="col-md-12">
            <input onclick="checkperolehanpakanternak(this.value)" class="form-group" name="sumberpakanternak"
                   id="sumberpakanternak2" value="2"
                   class="form-check-input" type="radio" required>
            <label for="sumberpakanternak2" class="form-check-label">Mencari</label>
        </div>
        <div class="col-md-12">
            <input onclick="checkperolehanpakanternak(this.value)" class="form-group" name="sumberpakanternak"
                   id="sumberpakanternak3" value="3"
                   class="form-check-input" type="radio" required>
            <label for="sumberpakanternak3" class="form-check-label">Membuat sendiri (silase)</label>
        </div>
        <div class="col-md-12">
            <input onclick="checkperolehanpakanternak(this.value)" class="form-group" name="sumberpakanternak"
                   id="sumberpakanternak4" value="4"
                   class="form-check-input" type="radio" required>
            <label for="sumberpakanternak4" class="form-check-label">Membeli</label>
        </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">41. Jika membeli, Sebutkan :</label>
        <div class="form-check col-lg-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Suplier</label>
                        <div class="col-md-8">
                            {{ Form::text('namasuplier',null,[
                            'disabled' =>'disabled',
                            'class'=>'form-control',
                            'id' => 'namasuplier'
                            ]) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>Desa/Kelurahan</label>
                        <div class="col-sm-6">
                            {{ Form::select('iddesasuplier',$desa,null,[
                                'disabled' =>'disabled',
                                'class'=>'form-control select2',
                                'placeholder' => 'Pilih',
                                'id' => 'iddesasuplier'
                                ]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">42. Pernahkan ternak anda terserang penyakit?</label>
        <div class="row">
        <div class="col-md-1">
        &nbsp;&nbsp;&nbsp;<input onclick="penyakit(this.value)" class="form-group" name="statusterserangpenyakit" id="statusterserangpenyakitya" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
        </div>
        <div id="divsakit" class="col-md-5" style="display:none">
        <div class="form-group row" >
                    <label>Jenis Penyakitnya</label>
                    <div class="col-sm-6">
                    {{ Form::select('idpenyakitternak',$penyakitternak,null,[
                    'class'=>'form-control select2',
                    'placeholder' => 'Pilih',
                    'id' => 'idpenyakitternak']) }}
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-1">
        <input class="form-group" onclick="penyakit(this.value)" name="statusterserangpenyakit" id="statusterserangpenyakittidak" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
    </div>

    <div class="form-group">
        <label for="inputProjectLeader">43. Kemana penjualan hasil produksi peternakan anda?</label>
        <div class="form-group">
            <div class="col-md-4">
                {{ Form::select('pemasaranhasilproduksi',array('1' => 'Pedagang', '2' => 'Pasar'),null,['required'=>'required',
        'class'=>'form-control select2',
        'placeholder' => 'Pilih',
        'id' => 'pemasaranhasilproduksi']) }}
            </div>
            <div class="col-md-8">
                <input name="pemasarandalamkabupaten" id="pemasarandalamkabupaten" value="1" class="form-group-input"
                       type="checkbox">
                <label for="pemasarandalamkabupaten" class="form-check-label"> Dalam Kabupaten</label>
                <input name="pemasaranluarkabupaten" id="pemasaranluarkabupaten" value="1" class="form-group-input"
                       type="checkbox">
                <label for="pemasaranluarkabupaten" class="form-check-label"> Luar Kabupaten</label>
                <input name="pemasaranluarprovinsi" id="pemasaranluarprovinsi" value="1" class="form-group-input"
                       type="checkbox">
                <label for="pemasaranluarprovinsi" class="form-check-label"> Luar Provinsi</label>
                <input name="pemasaranluarnegeri" id="pemasaranluarnegeri" value="1" class="form-group-input"
                       type="checkbox">
                <label for="pemasaranluarnegeri" class="form-check-label"> Luar Negeri</label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputProjectLeader">44. Bagaimana anda mengelola limbah hasil peternakan anda?</label>
        <div class="col-md-12">
            <input onclick="checklimbahhasilternak(this.value)" class="form-group" name="pengolahanlimbah" id="pengolahanlimbah1" value="1"
                   class="form-check-input" type="radio" required>
            <label for="pengolahanlimbah1" class="form-check-label">Dibuang</label>
        </div>
        <div class="col-md-12">
            <input onclick="checklimbahhasilternak(this.value)" class="form-group" name="pengolahanlimbah" id="pengolahanlimbah2" value="2"
                   class="form-check-input" type="radio" required>
            <label for="pengolahanlimbah2" class="form-check-label">Diolah sendiri</label>
        </div>
        <div class="col-md-12">
            <input onclick="checklimbahhasilternak(this.value)" class="form-group" name="pengolahanlimbah" id="pengolahanlimbah3" value="3"
                   class="form-check-input" type="radio" required>
            <label for="pengolahanlimbah3" class="form-check-label">Dijual</label>
        </div>
    </div>
    <div class="form-group">
        <label for="inputProjectLeader">45. Jika dijual, sebutkan:</label>
        <div class="form-check col-lg-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Kapasitas Limbah</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                {{ Form::text('kapasitaslimbahperbulan',null,[
                                'disabled' =>'disabled',
                                'class'=>'form-control',
                                'id' => 'kapasitaslimbahperbulan'
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
                                {{ Form::text('hargasebelumolah',null,[
                                    'disabled' =>'disabled',
                                    'class'=>'form-control',
                                    'id' => 'hargasebelumolah'
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
                                {{ Form::text('hargasetelaholah',null,[
                                    'disabled' =>'disabled',
                                    'class'=>'form-control',
                                    'id' => 'hargasetelaholah'
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
    <div class="row">
        <div class="col-sm-12">
            <!-- checkbox -->
            <div class="form-group">
                <label for="inputProjectLeader">46. Jika diolah, sebutkan untuk apa?</label>
                <div class="row">
                    @php($i = 1)
                    @foreach($limbahternak as $limbah)
                        <div class="form-check col-lg-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input name="idlimbahternak{{$i}}" onclick="checklimbahternak()"
                                           id="idlimbahternak{{$i}}" value="{{$limbah->id}}"
                                           class="form-group-input" type="checkbox" disabled="disabled">
                                    <label for="idlimbahternak{{$i}}"
                                           class="form-check-label">{{$limbah->limbahternak}}</label>
                                </div>
                                <div class="col-md-3" id="divkapasitasperbulan{{$i}}" style="display: none">
                                    <div class="form-group row">
                                        {{ Form::label('kapasitasperbulan'.$i, 'Produksi/bulan') }}
                                        <div class="col-sm-4">
                                            {{ Form::text('kapasitasperbulanlimbahternak'.$i,null,[
                                            'class'=>'form-control',
                                                'id' => 'kapasitasperbulanlimbahternak'.$i
                                             ]) }}
                                        </div>
                                        <div class="col-sm-3">
                                            {{ Form::select('satuanlimbahlimbahternak'.$i,$satuan,null,[
                                                           'class'=>'form-control select2',
                                                           'placeholder' => 'Pilih',
                                                           'id' => 'satuanlimbahlimbahternak'.$i
                                                           ]) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="divhargajual{{$i}}" style="display: none">
                                    <div class="form-group row">
                                        {{ Form::label('hargajual'.$i, 'Harga jual') }}
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                {{ Form::text('hargajuallimbahternak'.$i,null,[
                                                'class'=>'form-control',
                                                    'id' => 'hargajuallimbahternak'.$i
                                                 ]) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php($i++)
                    @endforeach
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="input-group">
                                    <input name="idlimbahternak{{$i}}" onclick="checklimbahternak()"
                                           id="idlimbahternak{{$i}}" value="99"
                                           class="form-group-input" type="checkbox" disabled="disabled">
                                    {{ Form::text('jenislimbahternak'.$i,null,[
                                        'disabled' =>'disabled',
                                        'class'=>'form-control',
                                        'id' => 'jenislimbahternak'.$i]) }}
                                </div>
                            </div>
                            <div class="col-md-3" id="divkapasitasperbulan{{$i}}" style="display: none">
                                <div class="form-group row">
                                    {{ Form::label('kapasitasperbulan'.$i, 'Produksi/bulan') }}
                                    <div class="col-sm-4">
                                        {{ Form::text('kapasitasperbulan'.$i,null,[
                                        'class'=>'form-control',
                                            'id' => 'kapasitasperbulan'.$i
                                         ]) }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ Form::select('satuanlimbah'.$i,$satuan,null,[
                                                       'class'=>'form-control select2',
                                                       'placeholder' => 'Pilih',
                                                       'id' => 'satuanlimbah'.$i
                                                       ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="divhargajual{{$i}}" style="display: none">
                                <div class="form-group row">
                                    {{ Form::label('hargajual'.$i, 'Harga jual') }}
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            {{ Form::text('hargajual'.$i,null,[
                                            'class'=>'form-control',
                                                'id' => 'hargajual'.$i
                                             ]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <!-- checkbox -->
            <div class="form-group">
                <label for="inputProjectLeader">47. Jenis pakan ternak yang digunakan</label>
                <div class="row">
                    @php($i = 1)
                    @foreach($jenispakanternak as $pakan)
                        <div class="form-check col-lg-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input onclick="checkpakanternak()" name="idjenispakanternak{{$i}}"
                                           id="idjenispakanternak{{$i}}" value="{{$pakan->id}}"
                                           class="form-group-input" type="checkbox">
                                    <label for="idjenispakanternak{{$i}}"
                                           class="form-check-label">{{$pakan->jenispakanternak}}</label>
                                </div>
                                <div class="col-md-3" id="divkebutuhanpakan{{$i}}" style="display: none">
                                    <div class="form-group row">
                                        {{ Form::label('kebutuhanperhari'.$i, 'Kebutuhan perhari') }}
                                        <div class="col-sm-4">
                                            {{ Form::text('kebutuhanperhari'.$i,null,[
                                            'class'=>'form-control',
                                                'id' => 'kebutuhanperhari'.$i
                                             ]) }}
                                        </div>
                                        <div class="col-sm-3">
                                            {{ Form::select('satuanpakan'.$i,$satuan,null,[
                                                           'class'=>'form-control select2',
                                                           'placeholder' => 'Pilih',
                                                           'id' => 'satuanpakan'.$i
                                                           ]) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="divhargabeli{{$i}}" style="display: none">
                                    <div class="form-group row">
                                        {{ Form::label('hargapakan'.$i, 'Harga beli') }}
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                {{ Form::text('hargapakan'.$i,null,[
                                                'class'=>'form-control',
                                                    'id' => 'hargapakan'.$i
                                                 ]) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php($i++)
                    @endforeach
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="input-group">
                                    <input onclick="checkpakanternak()" name="idjenispakanternak{{$i}}"
                                           id="idjenispakanternak{{$i}}" value="99"
                                           class="form-group-input" type="checkbox">
                                    {{ Form::text('namapakanternak'.$i,null,[
                                            'disabled' =>'disabled',
                                            'class'=>'form-control',
                                            'id' => 'namapakanternak'.$i]) }}
                                </div>
                            </div>
                            <div class="col-md-3" id="divkebutuhanpakan{{$i}}" style="display: none">
                                <div class="form-group row">
                                    {{ Form::label('kebutuhanperhari'.$i, 'Kebutuhan/hari') }}
                                    <div class="col-sm-4">
                                        {{ Form::text('kebutuhanperhari'.$i,null,[
                                        'class'=>'form-control',
                                            'id' => 'kebutuhanperhari'.$i
                                         ]) }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ Form::select('satuanpakan'.$i,$satuan,null,[
                                                       'class'=>'form-control select2',
                                                       'placeholder' => 'Pilih',
                                                       'id' => 'satuanpakan'.$i
                                                       ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="divhargabeli{{$i}}" style="display: none">
                                <div class="form-group row">
                                    {{ Form::label('hargapakan'.$i, 'Harga beli') }}
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp.</span>
                                            </div>
                                            {{ Form::text('hargapakan'.$i,null,[
                                            'class'=>'form-control',
                                                'id' => 'hargapakan'.$i
                                             ]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="divpertanian19" class="form-group">
        <label for="inputProjectLeader">48. Berapa jumlah pekerja tetap (dibayar) dalam usaha peternakan anda (tidak termasuk pemilik/pengelola)? isikan 0 (nol) jika tidak ada</label>
        <div class="col-md-12">
        <div class="row">
                <div class="col-md-2">
                    <div class="form-group row">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laki-Laki</label>
                        <div class="col-md-5">
                            {{ Form::number('buruhternaklaki',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                            'class'=>'form-control',
                            'id' => 'buruhternaklaki'
                            ]) }}
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group row">
                        <label>Perempuan</label>
                        <div class="col-sm-5">
                        {{ Form::number('buruhternakperempuan',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                            'class'=>'form-control',
                            'id' => 'buruhternakperempuan'
                            ]) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End Div Peternakan (Show/Hide) -->
</div>