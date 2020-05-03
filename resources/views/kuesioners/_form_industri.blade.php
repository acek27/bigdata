<!-- Kuesioner Bidang Industri -->
<div class="form-group">
    <label for="inputDescription">9. Apakah anda memiliki usaha industri?</label>
    <div class="col-md-1">
        <input onclick="checkindustri(this.value)" class="form-group" name="bidangindustri" id="bidangindustri"
               value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkindustri(this.value)" class="form-group" name="bidangindustri" id="bidangindustri"
               value="0" class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>


<div id="divjenisindustri" class="form-group">
    <label for="inputDescription">10. Pilihlah jenis usaha pembuatan/industri anda dan isikan keterangannya : (bisa
        memilih dan mengisi lebih dari satu)</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis Industri</th>
                        <th>Nama/Jenis Produk</th>
                        <th>Kapasitas Produksi/Bulan</th>
                        <th>Bahan Baku Utama</th>
                        <th>Kebutuhan/Bulan</th>
                        <th>Satuan Bahan Baku</th>
                        <th>Harga Kulak Bahan Baku</th>
                        <th>Satuan Kulak</th>
                        <th>Asal Suplier Bahan Baku Utama</th>
                        <th>Nama Suplier Bahan Baku Utama</th>
                        <th>Harga Jual Produk Hasil Produksi</th>
                        <th>Satuan Jual</th>
                        <th>Biaya Operasional Produksi/Bulan</th>
                        <th>Daerah Pemasaran Produk</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($i= 1)
                    @foreach($jenisindustri as $industri)
                        <tr>
                            <td>
                                <input onclick="checkjenisindustri()" name="idjenisindustri{{$i}}"
                                       id="idjenisindustri{{$i}}" value="{{$industri->id}}"
                                       class="form-group-input" type="checkbox">
                                <label
                                    for="idjenisindustri{{$i}}">{{$industri->id}}{{'. '}}{{$industri->jenisindustri}}</label>
                            </td>
                            <td id="kolom1industri{{$i}}"
                                style="display: none">{{ Form::text('namaproduk'.$i,null,['class'=>'form-control','id' => 'namaproduk'.$i]) }}
                            </td>
                            <td id="kolom2industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    {{ Form::text('produksiperbulan'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'produksiperbulan'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        {{ Form::select('satuanproduksi'.$i,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanproduksi'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom3industri{{$i}}" style="display: none">{{ Form::select('idbahanbaku'.$i,$bahanbaku,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku'.$i
                            ]) }}
                            </td>
                            <td id="kolom4industri{{$i}}" style="display: none">
                                {{ Form::text('kebutuhanperbulan'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanperbulan'.$i
                                ]) }}
                            </td>
                            <td id="kolom5industri{{$i}}" style="display: none">
                                {{ Form::select('satuanbahanbaku'.$i,$satuan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanbahanbaku'.$i
                                ]) }}
                            </td>
                            <td id="kolom6industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulakbahan'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulakbahan'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom7industri{{$i}}" style="display: none">
                                {{ Form::select('satuankulak'.$i,$satuan,null,[
                               'class'=>'form-control select2','placeholder' => 'Pilih',
                               'id' => 'satuankulak'.$i
                               ]) }}
                            </td>
                            <td id="kolom8industri{{$i}}" style="display: none">
                                {{ Form::select('idsuplier'.$i, $suplier,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'idsuplier'.$i
                                      ]) }}
                            </td>
                            <td id="kolom9industri{{$i}}" style="display: none">
                                {{ Form::text('namasuplier'.$i,null,[
                                            'class'=>'form-control',
                                            'id' => 'namasuplier'.$i
                                        ]) }}
                            </td>
                            <td id="kolom10industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualproduk'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualproduk'.$i
                                    ]) }}

                                </div>
                            </td>
                            <td id="kolom11industri{{$i}}" style="display: none">

                                {{ Form::select('satuanjual'.$i,$satuan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanjual'.$i
                                ]) }}

                            </td>
                            <td id="kolom12industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperbulan'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionalperbulan'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom13industri{{$i}}" style="display: none">
                                <input name="pemasarandalamkabupaten{{$i}}" id="pemasarandalamkabupaten{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten{{$i}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten{{$i}}" id="pemasaranluarkabupaten{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten{{$i}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi{{$i}}" id="pemasaranluarprovinsi{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi{{$i}}" class="form-check-label">Luar Provinsi</label>

                                <input name="pemasaranluarnegeri{{$i}}" id="pemasaranluarnegeri{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarnegeri{{$i}}" class="form-check-label">Luar Negeri</label>
                            </td>

                        </tr>
                        @php($i++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisindustri()" name="idjenisindustri{{$i}}"
                                       id="idjenisindustri{{$i}}" value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisindustri'.$i,null,['disabled' =>'disabled','class'=>'form-control','id' => 'jenisindustri'.$i,'placeholder'=>'Ketik Nama Usaha']) }}
                            </div>
                        </td>
                        <td id="kolom1industri{{$i}}" style="display: none">
                            {{ Form::text('namaproduk'.$i,null,['class'=>'form-control','id' => 'namaproduk'.$i]) }}
                        </td>
                        <td id="kolom2industri{{$i}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('produksiperbulan'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'produksiperbulan'.$i
                                ]) }}
                                <div class="input-group-append">
                                    {{ Form::select('satuanproduksi'.$i,$satuan,null,[
                                    'class'=>'form-control select2','placeholder' => 'Pilih',
                                    'id' => 'satuanproduksi'.$i
                                    ]) }}
                                </div>
                            </div>
                        </td>
                        <td id="kolom3industri{{$i}}" style="display: none">{{ Form::select('idbahanbaku'.$i,$bahanbaku,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku'.$i
                            ]) }}
                        </td>
                        <td id="kolom4industri{{$i}}" style="display: none">
                            {{ Form::text('kebutuhanperbulan'.$i,null,[
                                'class'=>'form-control',
                                'id' => 'kebutuhanperbulan'.$i
                            ]) }}
                        </td>
                        <td id="kolom5industri{{$i}}" style="display: none">
                            {{ Form::select('satuanbahanbaku'.$i,$satuan,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'satuanbahanbaku'.$i
                            ]) }}
                        </td>
                        <td id="kolom6industri{{$i}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargakulakbahan'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargakulakbahan'.$i
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom7industri{{$i}}" style="display: none">
                            {{ Form::select('satuankulak'.$i,$satuan,null,[
                           'class'=>'form-control select2','placeholder' => 'Pilih',
                           'id' => 'satuankulak'.$i
                           ]) }}
                        </td>
                        <td id="kolom8industri{{$i}}" style="display: none">
                            {{ Form::select('idsuplier'.$i, $suplier,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'idsuplier'.$i
                                  ]) }}
                        </td>
                        <td id="kolom9industri{{$i}}" style="display: none">
                            {{ Form::text('namasuplier'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'namasuplier'.$i
                                    ]) }}
                        </td>
                        <td id="kolom10industri{{$i}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargajualproduk'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargajualproduk'.$i
                                ]) }}

                            </div>
                        </td>
                        <td id="kolom11industri{{$i}}" style="display: none">

                            {{ Form::select('satuanjual'.$i,$satuan,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'satuanjual'.$i
                            ]) }}

                        </td>
                        <td id="kolom12industri{{$i}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('operasionalperbulan'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'operasionalperbulan'.$i
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom13industri{{$i}}" style="display: none">
                            <input name="pemasarandalamkabupaten{{$i}}" id="pemasarandalamkabupaten{{$i}}" value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasarandalamkabupaten" class="form-check-label">Dalam Kabupaten</label>

                            <input name="pemasaranluarkabupaten{{$i}}" id="pemasaranluarkabupaten{{$i}}" value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasaranluarkabupaten{{$i}}" class="form-check-label">Luar Kabupaten</label>

                            <input name="pemasaranluarprovinsi{{$i}}" id="pemasaranluarprovinsi{{$i}}" value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasaranluarprovinsi{{$i}}" class="form-check-label">Luar Provinsi</label>

                            <input name="pemasaranluarnegeri{{$i}}" id="pemasaranluarnegeri{{$i}}" value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasaranluarnegeri{{$i}}" class="form-check-label">Luar Negeri</label>
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
