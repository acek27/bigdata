<!-- Kuesioner Bidang Industri -->
<div class="form-group">
    <label for="inputDescription">9. Apakah anda memiliki usaha industri?</label>
    <div class="col-md-1">
        <input onclick="checkindustri(this.value)" class="form-group" name="bidangindustri" id="bidangindustri"
               value="1" class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkindustri(this.value)" class="form-group" name="bidangindustri" id="bidangindustri"
               value="0" class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
</div>


<div id="divjenisindustri1" class="form-group">
    <label for="inputDescription">10. Pilihlah jenis usaha pembuatan/industri anda dan isikan keterangannya : (bisa
        memilih dan mengisi lebih dari satu)</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th style="text-align: center; vertical-align: middle">Jenis Industri</th>
                        <th style="text-align: center; vertical-align: middle">Nama/Jenis Produk</th>
                        <th style="text-align: center; vertical-align: middle">Bahan Baku Utama</th>
                        <th style="text-align: center; vertical-align: middle">Kebutuhan Bahan Baku perbulan</th>
                        <th style="text-align: center; vertical-align: middle">Harga Kulak Bahan Baku per satuan kulak</th>
                        <th style="text-align: center; vertical-align: middle">Asal Suplier Bahan Baku Utama</th>
                        <th style="text-align: center; vertical-align: middle">Nama Suplier Bahan Baku Utama</th>
                        <th style="text-align: center; vertical-align: middle">Kapasitas Produksi perbulan</th>
                        <th style="text-align: center; vertical-align: middle">Harga Jual Produk Hasil Produksi per satuan</th>
                        <th style="text-align: center; vertical-align: middle">Operasional Produksi perbulan</th>
                        <th style="text-align: center; vertical-align: middle">Omset/Pendapatan Kotor perbulan</th>
                        <th style="text-align: center; vertical-align: middle">Daerah Pemasaran Produk</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $bar="bar";
                        $i= 1;
                    @endphp
                    @foreach($jenisindustri as $industri)
                        <tr>
                            <td>
                                <input onclick="checkjenisindustri()" name="idjenisindustri1bar{{$i}}"
                                       id="idjenisindustri1bar{{$i}}" value="{{$industri->id}}"
                                       class="form-group-input" type="checkbox">
                                <label
                                    for="idjenisindustri1bar{{$i}}">{{$industri->id}}{{'. '}}{{$industri->jenisindustri}}</label>
                            </td>
                            <td id="kolom1baris1industri{{$i}}"
                                style="display: none">{{ Form::text('namaproduk1bar'.$i,null,['required'=>'required','class'=>'form-control','id' => 'namaproduk1bar'.$i]) }}
                            </td>
                            <td id="kolom2baris1industri{{$i}}" style="display: none">
                            {{ Form::select('idbahanbaku1bar'.$i,$bahanbaku,null,['required'=>'required',
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku1bar'.$i
                            ]) }}
                            </td>
                            <td id="kolom3baris1industri{{$i}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kebutuhanperbulan1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanperbulan1bar'.$i
                                ]) }}
                                <div class="input-group-append">
                                {{ Form::select('satuanbahanbaku1bar'.$i,$satuan,null,['required'=>'required',
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanbahanbaku1bar'.$i
                                ]) }}
                                </div>
                            </div>
                            </td>
                            <td id="kolom4baris1industri{{$i}}" style="display: none">
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulakbahan1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                        'class'=>'form-control',
                                        'id' => 'hargakulakbahan1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                    <span class="input-group-text">/</span>
                                    {{ Form::select('satuankulak1bar'.$i,$satuan,null,['disabled'=>'disabled','required'=>'required',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuankulak1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom5baris1industri{{$i}}" style="display: none">
                            {{ Form::select('idsuplier1bar'.$i, $suplier,null,['required'=>'required',
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'idsuplier1bar'.$i
                                      ]) }}
                            </td>
                            <td id="kolom6baris1industri{{$i}}" style="display: none">
                            {{ Form::text('namasuplier1bar'.$i,null,['required'=>'required',
                                            'class'=>'form-control',
                                            'id' => 'namasuplier1bar'.$i
                                        ]) }}
                            </td>
                            <td id="kolom7baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    {{ Form::text('produksiperbulan1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                        'class'=>'form-control',
                                        'id' => 'produksiperbulan1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        {{ Form::select('satuanproduksi1bar'.$i,$satuan,null,['required'=>'required',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanproduksi1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom8baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualproduk1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                        'class'=>'form-control',
                                        'id' => 'hargajualproduk1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuanjual1bar'.$i,$satuan,null,['disabled'=>'disabled','required'=>'required',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanjual1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom9baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperbulan1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                        'class'=>'form-control',
                                        'id' => 'operasionalperbulan1bar'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom10baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('omsetperbulan1bar'.$i,null,['style'=>'text-align:right','required'=>'required',
                                        'class'=>'form-control',
                                        'id' => 'omsetperbulan1bar'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom11baris1industri{{$i}}" style="display: none">
                                <input name="pemasarandalamkabupaten1bar{{$i}}" id="pemasarandalamkabupaten1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten1bar{{$i}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten1bar{{$i}}" id="pemasaranluarkabupaten1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten1bar{{$i}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi1bar{{$i}}" id="pemasaranluarprovinsi1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi1bar{{$i}}" class="form-check-label">Luar Provinsi</label>

                                <input name="pemasaranluarnegeri1bar{{$i}}" id="pemasaranluarnegeri1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarnegeri1bar{{$i}}" class="form-check-label">Luar Negeri</label>
                            </td>

                        </tr>
                        @for($x=2;$x<=3;$x++)
                        <tr>
                            <td id="kolom0baris{{$x}}industri{{$i}}" style="display: none">
                                </td>
                            <td id="kolom1baris{{$x}}industri{{$i}}"
                                style="display: none">{{ Form::text('namaproduk'.$x.$bar.$i,null,['class'=>'form-control','id' => 'namaproduk'.$x.$bar.$i]) }}
                            </td>
                            <td id="kolom2baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::select('idbahanbaku'.$x.$bar.$i,$bahanbaku,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku'.$x.$bar.$i
                            ]) }}
                            </td>
                            <td id="kolom3baris{{$x}}industri{{$i}}" style="display: none">
                            <div class="input-group">
                            {{ Form::text('kebutuhanperbulan'.$x.$bar.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanperbulan'.$x.$bar.$i
                                ]) }}
                                <div class="input-group-append">
                                {{ Form::select('satuanbahanbaku'.$x.$bar.$i,$satuan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanbahanbaku'.$x.$bar.$i
                                ]) }}   
                                </div>
                            </div>
                            </td>
                            <td id="kolom4baris{{$x}}industri{{$i}}" style="display: none">
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulakbahan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulakbahan'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                    <span class="input-group-text">/</span>
                                    {{ Form::select('satuankulak'.$x.$bar.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuankulak'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>  
                            </td>
                            <td id="kolom5baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::select('idsuplier'.$x.$bar.$i, $suplier,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'idsuplier'.$x.$bar.$i
                                      ]) }}
                            </td>
                            <td id="kolom6baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::text('namasuplier'.$x.$bar.$i,null,[
                                            'class'=>'form-control',
                                            'id' => 'namasuplier'.$x.$bar.$i
                                        ]) }}
                            </td>
                            <td id="kolom7baris{{$x}}industri{{$i}}" style="display: none">
                                
                                <div class="input-group">
                                    {{ Form::text('produksiperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'produksiperbulan'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        {{ Form::select('satuanproduksi'.$x.$bar.$i,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanproduksi'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom8baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualproduk'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualproduk'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuanjual'.$x.$bar.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanjual'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom9baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionalperbulan'.$x.$bar.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom10baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('omsetperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'omsetperbulan'.$x.$bar.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom11baris{{$x}}industri{{$i}}" style="display: none">
                                <input name="pemasarandalamkabupaten{{$x}}bar{{$i}}" id="pemasarandalamkabupaten{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten{{$x}}bar{{$i}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten{{$x}}bar{{$i}}" id="pemasaranluarkabupaten{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten{{$x}}bar{{$i}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi{{$x}}bar{{$i}}" id="pemasaranluarprovinsi{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi{{$x}}bar{{$i}}" class="form-check-label">Luar Provinsi</label>

                                <input name="pemasaranluarnegeri{{$x}}bar{{$i}}" id="pemasaranluarnegeri{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarnegeri1bar{{$i}}" class="form-check-label">Luar Negeri</label>
                            </td>

                        </tr>
                        @endfor
                        @php($i++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisindustri()" name="idjenisindustri1bar{{$i}}"
                                       id="idjenisindustri1bar{{$i}}" value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisindustri1bar'.$i,null,['disabled' =>'disabled','class'=>'form-control','id' => 'jenisindustri1bar'.$i,'placeholder'=>'Lainnya']) }}
                            </div>
                        </td>
                        <td id="kolom1baris1industri{{$i}}"
                                style="display: none">{{ Form::text('namaproduk1bar'.$i,null,['class'=>'form-control','id' => 'namaproduk1bar'.$i]) }}
                            </td>
                            <td id="kolom2baris1industri{{$i}}" style="display: none">
                            {{ Form::select('idbahanbaku1bar'.$i,$bahanbaku,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku1bar'.$i
                            ]) }}
                            </td>
                            <td id="kolom3baris1industri{{$i}}" style="display: none">
                            <div class="input-group">
                            {{ Form::text('kebutuhanperbulan1bar'.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanperbulan1bar'.$i
                                ]) }}
                                <div class="input-group-prepend">
                                {{ Form::select('satuanbahanbaku1bar'.$i,$satuan,null,[
                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                'id' => 'satuanbahanbaku1bar'.$i
                                ]) }} 
                                </div>
                            </div>
                            </td>
                            <td id="kolom4baris1industri{{$i}}" style="display: none">
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulakbahan1bar'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulakbahan1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuankulak1bar'.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuankulak1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom5baris1industri{{$i}}" style="display: none">
                            {{ Form::select('idsuplier1bar'.$i, $suplier,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'idsuplier1bar'.$i
                                      ]) }}
                            </td>
                            <td id="kolom6baris1industri{{$i}}" style="display: none">
                            {{ Form::text('namasuplier1bar'.$i,null,[
                                            'class'=>'form-control',
                                            'id' => 'namasuplier1bar'.$i
                                        ]) }}
                            </td>
                            <td id="kolom7baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    {{ Form::text('produksiperbulan1bar'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'produksiperbulan1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        {{ Form::select('satuanproduksi1bar'.$i,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanproduksi1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom8baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualproduk1bar'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualproduk1bar'.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuanjual1bar'.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanjual1bar'.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom9baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperbulan1bar'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionalperbulan1bar'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom10baris1industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('omsetperbulan1bar'.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'omsetperbulan1bar'.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom11baris1industri{{$i}}" style="display: none">
                                <input name="pemasarandalamkabupaten1bar{{$i}}" id="pemasarandalamkabupaten1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten1bar{{$i}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten1bar{{$i}}" id="pemasaranluarkabupaten1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten1bar{{$i}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi1bar{{$i}}" id="pemasaranluarprovinsi1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi1bar{{$i}}" class="form-check-label">Luar Provinsi</label>

                                <input name="pemasaranluarnegeri1bar{{$i}}" id="pemasaranluarnegeri1bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarnegeri1bar{{$i}}" class="form-check-label">Luar Negeri</label>
                            </td>
                    </tr>
                    @for($x=2;$x<=3;$x++)
                        <tr>
                            <td id="kolom0baris{{$x}}industri{{$i}}" style="display: none">
                            <div class="input-group">
                            &nbsp;&nbsp;&nbsp;&nbsp; {{ Form::text('jenisindustri'.$x.$bar.$i,null,['class'=>'form-control','id' => 'jenisindustri'.$x.$bar.$i,'placeholder'=>'Lainnya']) }}
                            </div>
                                </td>
                            <td id="kolom1baris{{$x}}industri{{$i}}"
                                style="display: none">{{ Form::text('namaproduk'.$x.$bar.$i,null,['class'=>'form-control','id' => 'namaproduk'.$x.$bar.$i]) }}
                            </td>
                            <td id="kolom2baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::select('idbahanbaku'.$x.$bar.$i,$bahanbaku,null,[
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'idbahanbaku'.$x.$bar.$i
                            ]) }}
                            </td>
                            <td id="kolom3baris{{$x}}industri{{$i}}" style="display: none">
                            <div class="input-group">
                            {{ Form::text('kebutuhanperbulan'.$x.$bar.$i,null,[
                                    'class'=>'form-control',
                                    'id' => 'kebutuhanperbulan'.$x.$bar.$i
                                ]) }}
                                <div class="input-group-append">
                                    {{ Form::select('satuanbahanbaku'.$x.$bar.$i,$satuan,null,[
                                    'class'=>'form-control select2','placeholder' => 'Pilih',
                                    'id' => 'satuanbahanbaku'.$x.$bar.$i
                                    ]) }} 
                                </div>
                            </div>
                            </td>
                            <td id="kolom4baris{{$x}}industri{{$i}}" style="display: none">
                            <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulakbahan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulakbahan'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuankulak'.$x.$bar.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuankulak'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom5baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::select('idsuplier'.$x.$bar.$i, $suplier,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'idsuplier'.$x.$bar.$i
                                      ]) }}
                            </td>
                            <td id="kolom6baris{{$x}}industri{{$i}}" style="display: none">
                            {{ Form::text('namasuplier'.$x.$bar.$i,null,[
                                            'class'=>'form-control',
                                            'id' => 'namasuplier'.$x.$bar.$i
                                        ]) }}
                            </td>
                            <td id="kolom7baris{{$x}}industri{{$i}}" style="display: none">
                                
                                <div class="input-group">
                                    {{ Form::text('produksiperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'produksiperbulan'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        {{ Form::select('satuanproduksi'.$x.$bar.$i,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanproduksi'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom8baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajualproduk'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajualproduk'.$x.$bar.$i
                                    ]) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">/</span>
                                        {{ Form::select('satuanjual'.$x.$bar.$i,$satuan,null,['disabled'=>'disabled',
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanjual'.$x.$bar.$i
                                        ]) }}
                                    </div>
                                </div>
                            </td>
                            <td id="kolom9baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionalperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionalperbulan'.$x.$bar.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom10baris{{$x}}industri{{$i}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('omsetperbulan'.$x.$bar.$i,null,[
                                        'class'=>'form-control',
                                        'id' => 'omsetperbulan'.$x.$bar.$i
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom11baris{{$x}}industri{{$i}}" style="display: none">
                                <input name="pemasarandalamkabupaten{{$x}}bar{{$i}}" id="pemasarandalamkabupaten{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten{{$x}}bar{{$i}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten{{$x}}bar{{$i}}" id="pemasaranluarkabupaten{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten{{$x}}bar{{$i}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi{{$x}}bar{{$i}}" id="pemasaranluarprovinsi{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi{{$x}}bar{{$i}}" class="form-check-label">Luar Provinsi</label>

                                <input name="pemasaranluarnegeri{{$x}}bar{{$i}}" id="pemasaranluarnegeri{{$x}}bar{{$i}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarnegeri1bar{{$i}}" class="form-check-label">Luar Negeri</label>
                            </td>

                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

<div id="divjenisindustri2" class="form-group">
    <label for="inputProjectLeader">11. Berapa total pekerja tetap (dibayar) dari usaha industri anda (tidak termasuk pemilik/pengelola)? isikan 0 'nol' jika tidak ada pekerja/karyawan</label>
    <div class="col-md-12">
    <div class="row">
            <div class="col-md-2">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laki-Laki</label>
                    <div class="col-md-5">
                        {{ Form::number('buruhindustrilaki',null,['required'=>'required','style'=>'text-align:right','min'=>'0',
                        'class'=>'form-control',
                        'id' => 'buruhindustrilaki'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group row">
                    <label>Perempuan</label>
                    <div class="col-sm-5">
                    {{ Form::number('buruhindustriperempuan',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                        'class'=>'form-control',
                        'id' => 'buruhindustriperempuan'
                        ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
