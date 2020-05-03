<!-- Kuesioner Bidang Perikanan-->

<div class="form-group">
    <label for="inputDescription">42. Apakah anda memiliki kegiatan dibidang perikanan?</label>
    <div class="col-md-1">
        <input onclick="checkperikanan(this.value)" class="form-group" name="perikanan" id="perikanan" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkperikanan(this.value)" class="form-group" name="perikanan" id="perikanan" value="0"
               class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>


<div id="divikan1" class="form-group">
    <label for="inputDescription">43. Isikan informasi jenis budidaya perikanan yang sedang anda kerjakan: (bisa mengisi
        lebih dari satu)</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis Ikan</th>
                        <th>Luasan Budidaya</th>
                        <th>satuan luas</th>
                        <th>Harga beli bibit ikan</th>
                        <th>Satuan bibit</th>
                        <th>Harga jual hasil produksi</th>
                        <th>Satuan jual</th>
                        <th>Tanggal tebar benih</th>
                        <th>Tanggal perikanan panen</th>
                        <th>Kapasitas produksi/tahun</th>
                        <th>periode produksi/tahun</th>
                        <th>Biaya operasional/produksi</th>
                        <th>Jenis Pakan Ikan</th>
                        <th>Kebutuhan Pakan/hari</th>
                        <th>Satuan Pakan</th>
                        <th>Harga Pakan Ikan/satuan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($ikan=1)
                    @foreach($jenisikanbudidaya as $ikanbudidaya)
                        <tr>
                            <td>
                                <input onclick="checkjenisikanbudidaya()" name="idikanbudidaya{{$ikan}}"
                                       id="idikanbudidaya{{$ikan}}"
                                       value="{{$ikanbudidaya->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idikanbudidaya{{$ikan}}"
                                       class="form-check-label">{{$ikanbudidaya->id}}{{'. '}}{{$ikanbudidaya->jenisikan}}</label>
                            </td>
                            <td id="kolom1ikan{{$ikan}}"
                                style="display: none">{{ Form::text('luaskolam'.$ikan,null,['class'=>'form-control','id' => 'luaskolam'.$ikan]) }}
                            </td>
                            <td id="kolom2ikan{{$ikan}}" style="display: none">
                                {{ Form::select('satuanluas'.$ikan,$satuan,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'satuanluaskolam'.$ikan
                                      ]) }}
                            </td>
                            <td id="kolom3ikan{{$ikan}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargabibit'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargabibitikan'.$ikan
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom4ikan{{$ikan}}" style="display: none">
                                {{ Form::select('satuanbibit'.$ikan,$satuan,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'satuanbibitikan'.$ikan
                                      ]) }}
                            </td>
                            <td id="kolom5ikan{{$ikan}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajual'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualikan'.$ikan
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom6ikan{{$ikan}}" style="display: none">
                                {{ Form::select('satuanjual'.$ikan,$satuan,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'satuanjualikan'.$ikan
                                      ]) }}
                            </td>
                            <td id="kolom7ikan{{$ikan}}" style="display: none">
                                {{ Form::text('tanggaltebar'.$ikan,null,[
                                          'class'=>'form-control datepicker',
                                          'id' => 'tanggaltebarikan'.$ikan
                                      ]) }}
                            </td>
                            <td id="kolom8ikan{{$ikan}}" style="display: none">
                                {{ Form::text('tanggalpanen'.$ikan,null,[
                                          'class'=>'form-control datepicker',
                                          'id' => 'tanggalpanenikan'.$ikan
                                      ]) }}</td>
                            <td id="kolom9ikan{{$ikan}}" style="display: none">
                                <div class="input-group">

                                    {{ Form::text('kapasitasperpanen'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'kapasitasperpanenikan'.$ikan
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">Ton</span>
                                    </div>
                                </div>
                            </td>
                            <td id="kolom10ikan{{$ikan}}" style="display: none">
                                <div class="input-group">

                                    {{ Form::text('panenpertahun'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'panenpertahunikan'.$ikan
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
                                    </div>
                                </div>
                            </td>

                            <td id="kolom11ikan{{$ikan}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('biayaproduksi'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'biayaproduksiikan'.$ikan
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom12ikan{{$ikan}}" style="display: none">
                                {{ Form::select('idjenispakan'.$ikan,$jenispakanikan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'idjenispakanikan'.$ikan
                                ]) }}
                            </td>
                            <td id="kolom13ikan{{$ikan}}" style="display: none">
                                {{ Form::text('kebutuhanpakanperhari'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanpakanperhariikan'.$ikan
                                ]) }}
                            </td>
                            <td id="kolom14ikan{{$ikan}}" style="display: none">
                                {{ Form::select('satuanpakan'.$ikan,$satuan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanpakanikan'.$ikan
                                ]) }}
                            </td>
                            <td id="kolom15ikan{{$ikan}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargapakan'.$ikan,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargapakanikan'.$ikan
                                    ]) }}
                                </div>
                            </td>
                        </tr>
                        @php($ikan++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisikanbudidaya()" name="idikanbudidaya{{$ikan}}"
                                       id="idikanbudidaya{{$ikan}}"
                                       value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisikanbudidaya'.$ikan,null,['disabled' =>'disabled','class'=>'form-control','id' => 'jenisikanbudidaya'.$ikan]) }}
                            </div>
                        </td>
                        <td id="kolom1ikan{{$ikan}}"
                            style="display: none">{{ Form::text('luaskolam'.$ikan,null,['class'=>'form-control','id' => 'luaskolam'.$ikan]) }}
                        </td>
                        <td id="kolom2ikan{{$ikan}}" style="display: none">
                            {{ Form::select('satuanluas'.$ikan,$satuan,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'satuanluaskolam'.$ikan
                                  ]) }}
                        </td>
                        <td id="kolom3ikan{{$ikan}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargabibit'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargabibitikan'.$ikan
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom4ikan{{$ikan}}" style="display: none">
                            {{ Form::select('satuanbibit'.$ikan,$satuan,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'satuanbibitikan'.$ikan
                                  ]) }}
                        </td>
                        <td id="kolom5ikan{{$ikan}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargajual'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargajualikan'.$ikan
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom6ikan{{$ikan}}" style="display: none">
                            {{ Form::select('satuanjual'.$ikan,$satuan,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'satuanjualikan'.$ikan
                                  ]) }}
                        </td>
                        <td id="kolom7ikan{{$ikan}}" style="display: none">
                            {{ Form::text('tanggaltebar'.$ikan,null,[
                                      'class'=>'form-control',
                                      'id' => 'tanggaltebarikan'.$ikan
                                  ]) }}
                        </td>
                        <td id="kolom8ikan{{$ikan}}" style="display: none">
                            {{ Form::text('tanggalpanen'.$ikan,null,[
                                      'class'=>'form-control',
                                      'id' => 'tanggalpanenikan'.$ikan
                                  ]) }}</td>
                        <td id="kolom9ikan{{$ikan}}" style="display: none">
                            <div class="input-group">

                                {{ Form::text('kapasitasperpanen'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'kapasitasperpanenikan'.$ikan
                                ]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Ton</span>
                                </div>
                            </div>
                        </td>
                        <td id="kolom10ikan{{$ikan}}" style="display: none">
                            <div class="input-group">

                                {{ Form::text('panenpertahun'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'panenpertahunikan'.$ikan
                                ]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Kali</span>
                                </div>
                            </div>
                        </td>

                        <td id="kolom11ikan{{$ikan}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('biayaproduksi'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'biayaproduksiikan'.$ikan
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom12ikan{{$ikan}}" style="display: none">
                            {{ Form::select('idjenispakan'.$ikan,$jenispakanikan,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idjenispakanikan'.$ikan
                            ]) }}
                        </td>
                        <td id="kolom13ikan{{$ikan}}" style="display: none">
                            {{ Form::text('kebutuhanpakanperhari'.$ikan,null,[
                                'class'=>'form-control',
                                'id' => 'kebutuhanpakanperhariikan'.$ikan
                            ]) }}
                        </td>
                        <td id="kolom14ikan{{$ikan}}" style="display: none">
                            {{ Form::select('satuanpakan'.$ikan,$satuan,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'satuanpakanikan'.$ikan
                            ]) }}
                        </td>
                        <td id="kolom15ikan{{$ikan}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargapakan'.$ikan,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargapakanikan'.$ikan
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
</div>

<div id="divikan2" class="form-group">
    <label for="inputProjectLeader">44. Bagaimana cara memperoleh pakan ikan?</label>
    <div class="col-md-12">
        <input onclick="checkpakanikan(this.value)" class="form-group" name="perolehanpakan" id="perolehanpakan1"
               value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membuat sendiri</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkpakanikan(this.value)" class="form-group" name="perolehanpakan" id="perolehanpakan2"
               value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membeli</label>
    </div>
</div>
<div id="divikan3" class="form-group">
    <label for="inputProjectLeader">45. Jika membeli, Sebutkan :</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Asal Suplier</label>
                    <div class="col-md-8">
                        {{ Form::select('idsuplier',$suplier,null,['disabled' =>'disabled',
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idsuplier'
                            ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Suplier</label>
                    <div class="col-md-8">
                        {{ Form::text('namasuplier',null,['disabled' =>'disabled',
                        'class'=>'form-control',
                        'id' => 'namasuplier'
                        ]) }}
                    </div>
                </div>
            </div>
        <!-- <div class="col-md-4">
                <div class="form-group row">
                    <label>Desa/Kelurahan</label>
                    <div class="col-sm-6">
                        {{ Form::select('iddesasuplier',$desa,null,[
                            'class'=>'form-control select2',
                            'id' => 'iddesasuplier'
                            ]) }}
            </div>
        </div>
    </div> -->
        </div>
    </div>
</div>

<div id="divikan4" class="form-group">
    <label for="inputProjectLeader">46. Apakah ada pengolahan lanjutan dari budidaya ikan yang anda kerjakan?</label>
    <div class="col-md-12">
        <input onclick="checkolahanikan(this.value)" class="form-group" name="olahanlanjutan" id="olahanlanjutan1"
               value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkolahanikan(this.value)" class="form-group" name="olahanlanjutan" id="olahanlanjutan2"
               value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Tidak, langsung dijual</label>
    </div>
</div>

<div id="divikan5" class="form-group">
    <label for="inputProjectLeader">47. Jika diolah, sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Olahan</label>
                    <div class="col-sm-8">
                        {{ Form::text('namaolahan',null,['disabled' =>'disabled',
                        'class'=>'form-control',
                        'id' => 'namaolahan'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Kapasitas Produksi/Bulan</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            {{ Form::text('produksiperbulan',null,['disabled' =>'disabled',
                            'class'=>'form-control',
                            'id' => 'produksiperbulan'
                            ]) }}
                            <div class="input-group-append">
                                {{ Form::select('satuanproduksi',$satuan,null,['disabled' =>'disabled',
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanproduksi'
                                ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Harga jual produk</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('hargajual',null,['disabled' =>'disabled',
                                'class'=>'form-control',
                                'id' => 'hargajual'
                                ]) }}
                            <div class="input-group-append">
                                {{ Form::select('satuanjual',$satuan,null,['disabled' =>'disabled',
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanjual'
                                ]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="divikan6" class="form-group">
    <label for="inputProjectLeader">48. Kemana pemasaran hasil produksi/olahan?</label>
    <div class="row">
        <div class="form-check col-lg-12">
            <div class="col-md-3">
                <input name="pemasaranolahanikan1" id="pemasaranolahanikan1" value="1"
                       class="form-group-input" type="checkbox">
                <label for="pemasaranolahanikan1" class="form-check-label">Dalam Kabupaten</label>
            </div>
            <div class="col-md-3">
                <input name="pemasaranolahanikan2" id="pemasaranolahanikan2" value="1"
                       class="form-group-input" type="checkbox">
                <label for="pemasaranolahanikan2" class="form-check-label">Luar Kabupaten</label>
            </div>
            <div class="col-md-3">
                <input name="pemasaranolahanikan3" id="pemasaranolahanikan3" value="1"
                       class="form-group-input" type="checkbox">
                <label for="pemasaranolahanikan3" class="form-check-label">Luar Provinsi</label>
            </div>
            <div class="col-md-3">
                <input name="pemasaranolahanikan4" id="pemasaranolahanikan4" value="1"
                       class="form-group-input" type="checkbox">
                <label for="pemasaranolahanikan4" class="form-check-label">Luar Negeri</label>
            </div>
        </div>

    </div>
</div>

<div id="divikan7" class="form-group">
    <label for="inputProjectLeader">49. Bila anda bergerak dibidang perikanan tangkap, sebutkan berapa perkiraan
        kapasitas penangkapan dalam satu hari</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis Ikan Tangkap</th>
                        <th>Kapasitas Tangkapan/hari</th>
                        <th>Pemasaran Hasil Tangkapan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($it=1)
                    @foreach($jenisikantangkap as $ikantangkap)
                        <tr>
                            <td>
                                <input onclick="checkjenisikantangkap()" name="idikantangkap{{$it}}"
                                       id="idikantangkap{{$it}}"
                                       value="{{$ikantangkap->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idikantangkap{{$it}}"
                                       class="form-check-label">{{$ikantangkap->id}}{{'. '}}{{$ikantangkap->jenisikan}}</label>
                            </td>
                            <td id="kolom1tangkap{{$it}}" style="display: none">
                                <div class="input-group">
                                    {{ Form::text('kapasitasperhari'.$it,null,['class'=>'form-control','id' => 'kapasitasperhari'.$it]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                </div>
                            </td>
                            <td id="kolom2tangkap{{$it}}" style="display: none">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap1{{$it}}"
                                               id="pemasarantangkap1{{$it}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap1{{$it}}" class="form-check-label">Dalam
                                            Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap2{{$it}}"
                                               id="pemasarantangkap2{{$it}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap2{{$it}}" class="form-check-label">Luar
                                            Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap3{{$it}}"
                                               id="pemasarantangkap3{{$it}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap3{{$it}}" class="form-check-label">Luar
                                            Provinsi</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap4{{$it}}"
                                               id="pemasarantangkap4{{$it}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap4{{$it}}" class="form-check-label">Luar
                                            Negeri</label>
                                    </div>


                                </div>
                            </td>
                        </tr>
                        @php($it++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisikantangkap()" name="idikantangkap{{$it}}"
                                       id="idikantangkap{{$it}}"
                                       value="{{$ikantangkap->id}}"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisikantangkap'.$it,null,['disabled' =>'disabled','class'=>'form-control','id' => 'jenisikantangkap'.$it]) }}
                            </div>
                        </td>
                        <td id="kolom1tangkap{{$it}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kapasitasperhari'.$it,null,['class'=>'form-control','id' => 'kapasitasperhari'.$it]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Kg</span>
                                </div>
                            </div>
                        </td>
                        <td id="kolom2tangkap{{$it}}" style="display: none">
                            <div class="row">
                                <div class="col-md-3">
                                    <input name="pemasarantangkap1{{$it}}"
                                           id="pemasarantangkap1{{$it}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap1{{$it}}" class="form-check-label">Dalam
                                        Kabupaten</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap2{{$it}}"
                                           id="pemasarantangkap2{{$it}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap2{{$it}}" class="form-check-label">Luar
                                        Kabupaten</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap3{{$it}}"
                                           id="pemasarantangkap3{{$it}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap3{{$it}}" class="form-check-label">Luar
                                        Provinsi</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap4{{$it}}"
                                           id="pemasarantangkap4{{$it}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap4{{$it}}" class="form-check-label">Luar
                                        Negeri</label>
                                </div>


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
</div>

