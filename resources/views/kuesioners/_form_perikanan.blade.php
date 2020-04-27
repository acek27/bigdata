<!-- Kuesioner Bidang Perikanan-->

<div class="form-group">
    <label for="inputDescription">43. Apakah anda memiliki kegiatan dibidang perikanan?</label>
    <div class="col-md-1">
        <input class="form-group" name="perikanan" id="perikanan" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="perikanan" id="perikanan" value="0" class="form-check-input" type="radio">
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
    <label for="inputDescription">44. Isikan informasi jenis budidaya perikanan yang sedang anda kerjakan: (bisa mengisi
        lebih dari satu)</label>
</div>
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
                @foreach($jenisikanbudidaya as $ikanbudidaya)
                    <tr>
                        <td>
                            <input name="ikanbudidaya{{$ikanbudidaya->id}}" id="ikanbudidaya{{$ikanbudidaya->id}}"
                                   value="{{$ikanbudidaya->id}}"
                                   class="form-group-input" type="checkbox">
                            <label for="ikanbudidaya{{$ikanbudidaya->id}}"
                                   class="form-check-label">{{$ikanbudidaya->id}}{{'. '}}{{$ikanbudidaya->jenisikan}}</label>
                        </td>
                        <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
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
                            {{ Form::select('id',$satuan,null,[
                                  'class'=>'form-control select2',
                                  'id' => 'id'
                                  ]) }}
                        </td>
                        <td>
                            {{ Form::text('aspek',null,[
                                      'class'=>'form-control',
                                      'id' => 'aspek'
                                  ]) }}
                        </td>
                        <td>
                            {{ Form::text('aspek',null,[
                                      'class'=>'form-control',
                                      'id' => 'aspek'
                                  ]) }}</td>
                        <td>
                            <div class="input-group">

                                {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Ton</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group">

                                {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                                <div class="input-group-append">
                                    <span class="input-group-text">Kali</span>
                                </div>
                            </div>
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
                            {{ Form::select('id',$jenispakanikan,null,[
                            'class'=>'form-control select2',
                            'id' => 'id'
                            ]) }}
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
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <div class="input-group">
                            <input name="jenisikanbudidaya11" id="jenisikanbudidaya11" value="11"
                                   class="form-group-input" type="checkbox">
                            {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                        </div>
                    </td>
                    <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
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
                        {{ Form::select('id',$satuan,null,[
                              'class'=>'form-control select2',
                              'id' => 'id'
                              ]) }}
                    </td>
                    <td>
                        {{ Form::text('aspek',null,[
                                  'class'=>'form-control',
                                  'id' => 'aspek'
                              ]) }}
                    </td>
                    <td>
                        {{ Form::text('aspek',null,[
                                  'class'=>'form-control',
                                  'id' => 'aspek'
                              ]) }}</td>
                    <td>
                        <div class="input-group">

                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Ton</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="input-group">

                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kali</span>
                            </div>
                        </div>
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
                        {{ Form::select('id',$jenispakanikan,null,[
                        'class'=>'form-control select2',
                        'id' => 'id'
                        ]) }}
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
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<div class="form-group">
    <label for="inputProjectLeader">45. Bagaimana cara memperoleh pakan ikan?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membuat sendiri</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membeli</label>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">46. Jika membeli, Sebutkan :</label>
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
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-2">
                <input class="form-group" name="suplierpasarikan" id="suplierpasarikan" value="1"
                       class="form-check-input" type="radio">
                <label class="form-check-label">Dalam Kecamatan</label>
            </div>
            <div class="col-md-2">
                <input class="form-group" name="suplierpasarikan" id="suplierpasarikan" value="2"
                       class="form-check-input" type="radio">
                <label class="form-check-label">Dalam Kabupaten</label>
            </div>
            <div class="col-md-2">
                <input class="form-group" name="suplierpasarikan" id="suplierpasarikan" value="3"
                       class="form-check-input" type="radio">
                <label class="form-check-label">Luar Kabupaten</label>
            </div>
            <div class="col-md-2">
                <input class="form-group" name="suplierpasarikan" id="suplierpasarikan" value="4"
                       class="form-check-input" type="radio">
                <label class="form-check-label">Luar Provinsi</label>
            </div>
            <div class="col-md-2">
                <input class="form-group" name="suplierpasarikan" id="suplierpasarikan" value="5"
                       class="form-check-input" type="radio">
                <label class="form-check-label">Luar Negeri</label>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">47. Apakah ada pengolahan lanjutan dari budidaya ikan yang anda kerjakan?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Tidak, langsung dijual</label>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">48. Jika diolah, sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Olahan</label>
                    <div class="col-sm-8">
                        {{ Form::text('aspek',null,[
                        'class'=>'form-control',
                        'id' => 'aspek'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group row">
                    <label>Kapasitas Produksi/Bulan</label>
                    <div class="col-sm-6">
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
                    <label>Harga jual produk</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
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
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">49. Kemana pemasaran hasil produksi/olahan?</label>
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

<div class="form-group">
    <label for="inputProjectLeader">50. Bila anda bergerak dibidang perikanan tangkap, sebutkan berapa perkiraan
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
                        <th>satuan</th>
                        <th>Pemasaran Hasil Tangkapan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jenisikantangkap as $ikantangkap)
                        <tr>
                            <td>
                                <input name="ikantangkap{{$ikantangkap->id}}" id="ikantangkap{{$ikantangkap->id}}"
                                       value="{{$ikantangkap->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="ikantangkap{{$ikantangkap->id}}"
                                       class="form-check-label">{{$ikantangkap->id}}{{'. '}}{{$ikantangkap->jenisikan}}</label>
                            </td>
                            <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                            </td>
                            <td>
                                {{ Form::select('id',$satuan,null,[
                                      'class'=>'form-control select2',
                                      'id' => 'id'
                                      ]) }}
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap1{{$ikantangkap->id}}"
                                               id="pemasarantangkap1{{$ikantangkap->id}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap1{{$ikantangkap->id}}" class="form-check-label">Dalam
                                            Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap2{{$ikantangkap->id}}"
                                               id="pemasarantangkap2{{$ikantangkap->id}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap2{{$ikantangkap->id}}" class="form-check-label">Luar
                                            Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap3{{$ikantangkap->id}}"
                                               id="pemasarantangkap3{{$ikantangkap->id}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap3{{$ikantangkap->id}}" class="form-check-label">Luar
                                            Provinsi</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="pemasarantangkap4{{$ikantangkap->id}}"
                                               id="pemasarantangkap4{{$ikantangkap->id}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="pemasarantangkap4{{$ikantangkap->id}}" class="form-check-label">Luar
                                            Negeri</label>
                                    </div>


                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input name="ikantangkap14" id="ikantangkap14" value="14"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                            </div>
                        </td>
                        <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                        </td>
                        <td>
                            {{ Form::select('id',$satuan,null,[
                                  'class'=>'form-control select2',
                                  'id' => 'id'
                                  ]) }}
                        </td>
                        <td>
                            <div class="row">
                                <div class="col-md-3">
                                    <input name="pemasarantangkap114}" id="pemasarantangkap114" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap114" class="form-check-label">Dalam Kabupaten</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap214" id="pemasarantangkap214" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap214" class="form-check-label">Luar Kabupaten</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap314" id="pemasarantangkap314" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap314" class="form-check-label">Luar Provinsi</label>
                                </div>
                                <div class="col-md-3">
                                    <input name="pemasarantangkap414" id="pemasarantangkap414" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="pemasarantangkap414" class="form-check-label">Luar Negeri</label>
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

