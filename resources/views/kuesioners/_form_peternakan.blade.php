<!-- Kuesioner Bidang Peternakan-->

<div class="form-group">
    <label for="inputDescription">31. Apakah anda memiliki kegiatan dibidang peternakan?</label>
    <div class="col-md-1">
        <input class="form-group" name="peternakan" id="peternakan" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="peternakan" id="peternakan" value="0" class="form-check-input" type="radio">
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
    <label for="inputDescription">32. Isikan informasi jenis komoditas peternakan / hasil peternakan yang sedang anda
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
                    <th>Harga bibit ternak/ekor</th>
                    <th>Harga jual ternak/ekor</th>
                    <th>Harga jual hasil peternakan</th>
                    <th>Satuan jual</th>
                    <th>Kapasitas produksi ternak/tahun</th>
                    <th>Kapasitas hasil produksi ternak/tahun</th>
                    <th>Periode produksi/tahun</th>
                    <th>Biaya Operasional/produksi</th>
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
                            'class'=>'form-control select2','placeholder' => 'Pilih',
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
                        'class'=>'form-control select2','placeholder' => 'Pilih',
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
    <label for="inputProjectLeader">33. Bagaimana cara anda mengelola usaha peternakan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dikelola sendiri</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dikelola orang lain</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="3"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dikelola secara komunal (tempat penitipan ternak)</label>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">34. Jika dikelola orang lain, siapa pemilik kandang ternak?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Pemilik ternak</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">pengelola ternak</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="3"
               class="form-check-input" type="radio">
        <label class="form-check-label">Kandang komunal</label>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">35. Apakah peruntukan ternak?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Pembibitan</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Pembudidaya</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="3"
               class="form-check-input" type="radio">
        <label class="form-check-label">Penggemukan</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="4"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dianakkan</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="5"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dijual hidup</label>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">36. Bagaimana cara memperoleh pakan ternak?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Mempunyai lahan hijauan pakan ternak (HPT) sendiri</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Mencari</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="3"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membuat sendiri (silase)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="4"
               class="form-check-input" type="radio">
        <label class="form-check-label">Membeli</label>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">37. Jika membeli, Sebutkan :</label>
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
    <label for="inputProjectLeader">37. Pernahkan ternak anda terserang penyakit?</label>
    <div class="col-md-4">
        {{ Form::select('id',array('1' => 'Tidak pernah', '2' => 'Pernah, penyakit individu', '3' => 'Pernah, penyakit menular'),null,['class'=>'form-control select2','id' => 'id']) }}
    </div>
    <div class="form-group">
        <div class="col-md-4">
            <label>Jika pernah, sebutkan nama penyakitnya:</label>
        </div>
        <div class="col-md-4">
            {{ Form::select('id',array('1' => 'Sakek Cetak', '2' => 'Sakek tabuk', '3' => 'Jurut'),null,['class'=>'form-control select2','id' => 'id']) }}
        </div>
    </div>
</div>

<div class="form-group">
    <label for="inputProjectLeader">38. Kemana penjualan hasil produksi peternakan anda?</label>
    <div class="form-group">
        <div class="col-md-4">
            {{ Form::select('id',array('1' => 'Pedagang', '2' => 'Pasar'),null,['class'=>'form-control select2','id' => 'id']) }}
        </div>
        <div class="col-md-8">
            <input name="pasar1" id="pasar1" value="1" class="form-group-input" type="checkbox">
            <label for="pasar1" class="form-check-label"> Dalam Kecamatan</label>
            <input name="pasar2" id="pasar2" value="2" class="form-group-input" type="checkbox">
            <label for="pasar2" class="form-check-label"> Dalam Kabupaten</label>
            <input name="pasar3" id="pasar3" value="3" class="form-group-input" type="checkbox">
            <label for="pasar3" class="form-check-label"> Luar Kabupaten</label>
            <input name="pasar4" id="pasar4" value="4" class="form-group-input" type="checkbox">
            <label for="pasar4" class="form-check-label"> Luar Provinsi</label>
            <input name="pasar5" id="pasar5" value="5" class="form-group-input" type="checkbox">
            <label for="pasar5" class="form-check-label"> Luar Negeri</label>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">39. Bagaimana anda mengelola limbah hasil peternakan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dibuang</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="2"
               class="form-check-input" type="radio">
        <label class="form-check-label">Diolah sendiri</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pengelolaanpertanian" id="pengelolaanpertanian" value="3"
               class="form-check-input" type="radio">
        <label class="form-check-label">Dijual</label>
    </div>
</div>
<div class="form-group">
    <label for="inputProjectLeader">40. Jika dijual, sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Kapasitas Limbah</label>
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
<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">41. Jenis pakan ternak yang digunakan</label>
            <div class="row">
                @foreach($jenispakanternak as $pakan)
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="pkn{{$pakan->id}}" id="pkn{{$pakan->id}}" value="{{$pakan->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="pkn{{$pakan->id}}"
                                       class="form-check-label">{{$pakan->jenispakanternak}}</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    {{ Form::label('aspek', 'Kebutuhan/hari') }}
                                    <div class="col-sm-4">
                                        {{ Form::text('aspek',null,[
                                        'class'=>'form-control',
                                            'id' => 'aspek'
                                         ]) }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ Form::select('id',$satuan,null,[
                                                       'class'=>'form-control select2',
                                                       'id' => 'id'
                                                       ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    {{ Form::label('aspek', 'Harga beli') }}
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
                        </div>
                    </div>
                @endforeach
                <div class="form-check col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <input name="pkn7" id="pkn7" value="7"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                {{ Form::label('aspek', 'Kebutuhan/hari') }}
                                <div class="col-sm-4">
                                    {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                        'id' => 'aspek'
                                     ]) }}
                                </div>
                                <div class="col-sm-3">
                                    {{ Form::select('id',$satuan,null,[
                                                   'class'=>'form-control select2',
                                                   'id' => 'id'
                                                   ]) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                {{ Form::label('aspek', 'Harga beli') }}
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
            <label for="inputProjectLeader">42. Jika diolah, sebutkan untuk apa?</label>
            <div class="row">
                @foreach($limbahternak as $limbah)
                    <div class="form-check col-lg-12">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="limbah{{$limbah->id}}" id="limbah{{$limbah->id}}" value="{{$limbah->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="limbah{{$limbah->id}}"
                                       class="form-check-label">{{$limbah->limbahternak}}</label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    {{ Form::label('aspek', 'Produksi/bulan') }}
                                    <div class="col-sm-4">
                                        {{ Form::text('aspek',null,[
                                        'class'=>'form-control',
                                            'id' => 'aspek'
                                         ]) }}
                                    </div>
                                    <div class="col-sm-3">
                                        {{ Form::select('id',$satuan,null,[
                                                       'class'=>'form-control select2',
                                                       'id' => 'id'
                                                       ]) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    {{ Form::label('aspek', 'Harga jual') }}
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
                        </div>
                    </div>
                @endforeach
                <div class="form-check col-lg-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <input name="limbah5" id="limbah5" value="5"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                {{ Form::label('aspek', 'Produksi/bulan') }}
                                <div class="col-sm-4">
                                    {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                        'id' => 'aspek'
                                     ]) }}
                                </div>
                                <div class="col-sm-3">
                                    {{ Form::select('id',$satuan,null,[
                                                   'class'=>'form-control select2',
                                                   'id' => 'id'
                                                   ]) }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                {{ Form::label('aspek', 'Harga jual') }}
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
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
