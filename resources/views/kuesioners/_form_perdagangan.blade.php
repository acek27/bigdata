<!-- Kuesioner Bidang Perdagangan -->
<div class="form-group">
    <label for="inputDescription">11. Apakah anda memiliki usaha perdagangan?</label>
    <div class="col-md-1">
        <input onclick="checkdagang(this.value)" class="form-group" name="perdagangan" id="perdagangan" value="1"
               class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkdagang(this.value)" class="form-group" name="perdagangan" id="perdagangan" value="0"
               class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div id="divjenisdagang" class="form-group">
    <label for="inputDescription">12. Pilihlah jenis usaha perdagangan anda dan isikan informasinya! (bisa mengisi lebih
        dari satu)</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 700px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis Usaha Dagang</th>
                        <th>10 produk terlaris/bulan</th>
                        <th>Jumlah Kulak/bulan</th>
                        <th>Satuan Kulak</th>
                        <th>Harga kulak produk</th>
                        <th>Harga jual produk</th>
                        <th>Satuan jual</th>
                        <th>Tempat kulak barang</th>
                        <th>Nama Toko/Suplier</th>
                        <th>Konsumen Terbanyak</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($jud= 1)
                    @foreach($jenisusahadagang as $dagang)
                        <tr>
                            <td>
                                <input onclick="checkjenisdagang()" name="idjenisusahadagang1bar{{$jud}}"
                                       id="idjenisusahadagang1bar{{$jud}}" value="{{$dagang->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idjenisusahadagang1bar{{$jud}}"
                                       class="form-check-label">{{$dagang->id}}{{'. '}}{{$dagang->jenisusahadagang}}</label>
                            </td>
                            <td id="kolom1baris1jenis{{$jud}}"
                                style="display: none">{{ Form::text('produkunggulan1bar'.$jud,null,['class'=>'form-control','id' => 'produkunggulan1bar'.$jud]) }}
                            </td>
                            <td id="kolom2baris1jenis{{$jud}}" style="display: none">
                                {{ Form::text('jumlahkulakperbulan1bar'.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'jumlahkulakperbulan1bar'.$jud
                                ]) }}
                            </td>
                            <td id="kolom3baris1jenis{{$jud}}" style="display: none">
                                {{ Form::select('satuankulak1bar'.$jud,$satuan,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'satuankulak1bar'.$jud
                                      ]) }}
                            </td>
                            <td id="kolom4baris1jenis{{$jud}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulak1bar'.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulak1bar'.$jud
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom5baris1jenis{{$jud}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajual1bar'.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajual1bar'.$jud
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom6baris1jenis{{$jud}}" style="display: none">
                                {{ Form::select('satuanjual1bar'.$jud,$satuan,null,[
                                      'class'=>'form-control select2','placeholder' => 'Pilih',
                                      'id' => 'satuanjual1bar'.$jud
                                      ]) }}
                            </td>
                            <td id="kolom7baris1jenis{{$jud}}" style="display: none">
                                {{ Form::select('idsuplier1bar'.$jud,array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,
                                ['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'idsuplier1bar'.$jud]) }}
                            </td>
                            <td id="kolom8baris1jenis{{$jud}}" style="display: none">
                                {{ Form::text('namasuplier1bar'.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'namasuplier1bar'.$jud
                                ]) }}
                            </td>
                            <td id="kolom9baris1jenis{{$jud}}" style="display: none">
                                <input name="pemasarandalamkecamatan1bar{{$jud}}"
                                       id="pemasarandalamkecamatan1bar{{$jud}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkecamatan1bar{{$jud}}" class="form-check-label">Dalam
                                    Kecamatan</label>

                                <input name="pemasarandalamkabupaten1bar{{$jud}}"
                                       id="pemasarandalamkabupaten1bar{{$jud}}" value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasarandalamkabupaten1bar{{$jud}}" class="form-check-label">Dalam
                                    Kabupaten</label>

                                <input name="pemasaranluarkabupaten1bar{{$jud}}" id="pemasaranluarkabupaten1bar{{$jud}}"
                                       value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarkabupaten1bar{{$jud}}" class="form-check-label">Luar
                                    Kabupaten</label>

                                <input name="pemasaranluarprovinsi1bar{{$jud}}" id="pemasaranluarprovinsi1bar{{$jud}}"
                                       value="1"
                                       class="form-group-input" type="checkbox">
                                <label for="pemasaranluarprovinsi1bar{{$jud}}" class="form-check-label">Luar
                                    Provinsi</label>


                            </td>

                        </tr>
                        @for($i=2;$i<=10;$i++)
                            @php($bar="bar")
                            <tr>
                                <td id="kolom1baris{{$i}}jenis{{$jud}}" style="display: none">
                                </td>
                                <td id="kolom2baris{{$i}}jenis{{$jud}}"
                                    style="display: none">{{ Form::text('produkunggulan'.$i.$bar.$jud,null,['class'=>'form-control','id' => 'produkunggulan'.$i.$bar.$jud]) }}
                                </td>
                                <td id="kolom3baris{{$i}}jenis{{$jud}}" style="display: none">
                                    {{ Form::text('jumlahkulakperbulan'.$i.$bar.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'jumlahkulakperbulan'.$i.$bar.$jud
                                    ]) }}
                                </td>
                                <td id="kolom4baris{{$i}}jenis{{$jud}}" style="display: none">
                                    {{ Form::select('satuankulak'.$i.$bar.$jud,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuankulak'.$i.$bar.$jud
                                        ]) }}
                                </td>
                                <td id="kolom5baris{{$i}}jenis{{$jud}}" style="display: none">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        {{ Form::text('hargakulak'.$i.$bar.$jud,null,[
                                            'class'=>'form-control',
                                            'id' => 'hargakulak'.$i.$bar.$jud
                                        ]) }}
                                    </div>
                                </td>
                                <td id="kolom6baris{{$i}}jenis{{$jud}}" style="display: none">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp.</span>
                                        </div>
                                        {{ Form::text('hargajual'.$i.$bar.$jud,null,[
                                            'class'=>'form-control',
                                            'id' => 'hargajual'.$i.$bar.$jud
                                        ]) }}
                                    </div>
                                </td>
                                <td id="kolom7baris{{$i}}jenis{{$jud}}" style="display: none">
                                    {{ Form::select('satuanjual'.$i.$bar.$jud,$satuan,null,[
                                        'class'=>'form-control select2','placeholder' => 'Pilih',
                                        'id' => 'satuanjual'.$i.$bar.$jud
                                        ]) }}
                                </td>
                                <td id="kolom8baris{{$i}}jenis{{$jud}}" style="display: none">
                                    {{ Form::select('idsuplier'.$i.$bar.$jud,array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,
                                    ['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'idsuplier'.$i.$bar.$jud]) }}
                                </td>
                                <td id="kolom9baris{{$i}}jenis{{$jud}}" style="display: none">
                                    {{ Form::text('namasuplier'.$i.$bar.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'namasuplier'.$i.$bar.$jud
                                    ]) }}
                                </td>
                            </tr>
                        @endfor
                        @php($jud++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenisdagang()" name="idjenisusahadagang1bar{{$jud}}"
                                       id="idjenisusahadagang1bar{{$jud}}" value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenisusahadagang1bar'.$jud,null,['disabled' =>'disabled','class'=>'form-control',
                             'id' => 'jenisusahadagang1bar'.$jud
                         ]) }}
                            </div>
                        </td>
                        <td id="kolom1baris1jenis{{$jud}}"
                            style="display: none">{{ Form::text('produkunggulan1bar'.$jud,null,['class'=>'form-control','id' => 'produkunggulan1bar'.$jud]) }}
                        </td>
                        <td id="kolom2baris1jenis{{$jud}}" style="display: none">
                            {{ Form::text('jumlahkulakperbulan1bar'.$jud,null,[
                                'class'=>'form-control',
                                'id' => 'jumlahkulakperbulan1bar'.$jud
                            ]) }}
                        </td>
                        <td id="kolom3baris1jenis{{$jud}}" style="display: none">
                            {{ Form::select('satuankulak1bar'.$jud,$satuan,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'satuankulak1bar'.$jud
                                  ]) }}
                        </td>
                        <td id="kolom4baris1jenis{{$jud}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargakulak1bar'.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargakulak1bar'.$jud
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom5baris1jenis{{$jud}}" style="display: none">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                {{ Form::text('hargajual1bar'.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'hargajual1bar'.$jud
                                ]) }}
                            </div>
                        </td>
                        <td id="kolom6baris1jenis{{$jud}}" style="display: none">
                            {{ Form::select('satuanjual1bar'.$jud,$satuan,null,[
                                  'class'=>'form-control select2','placeholder' => 'Pilih',
                                  'id' => 'satuanjual1bar'.$jud
                                  ]) }}
                        </td>
                        <td id="kolom7baris1jenis{{$jud}}" style="display: none">
                            {{ Form::select('idsuplier1bar'.$jud,array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,
                            ['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'idsuplier1bar'.$jud]) }}
                        </td>
                        <td id="kolom8baris1jenis{{$jud}}" style="display: none">
                            {{ Form::text('namasuplier1bar'.$jud,null,[
                                'class'=>'form-control',
                                'id' => 'namasuplier1bar'.$jud
                            ]) }}
                        </td>
                        <td id="kolom9baris1jenis{{$jud}}" style="display: none">
                            <input name="pemasarandalamkecamatan1bar{{$jud}}" id="pemasarandalamkecamatan1bar{{$jud}}"
                                   value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasarandalamkecamatan1bar{{$jud}}" class="form-check-label">Dalam
                                Kecamatan</label>

                            <input name="pemasarandalamkabupaten1bar{{$jud}}" id="pemasarandalamkabupaten1bar{{$jud}}"
                                   value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasarandalamkabupaten1bar{{$jud}}" class="form-check-label">Dalam
                                Kabupaten</label>

                            <input name="pemasaranluarkabupaten1bar{{$jud}}" id="pemasaranluarkabupaten1bar{{$jud}}"
                                   value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasaranluarkabupaten1bar{{$jud}}" class="form-check-label">Luar
                                Kabupaten</label>

                            <input name="pemasaranluarprovinsi1bar{{$jud}}" id="pemasaranluarprovinsi1bar{{$jud}}"
                                   value="1"
                                   class="form-group-input" type="checkbox">
                            <label for="pemasaranluarprovinsi1bar{{$jud}}" class="form-check-label">Luar
                                Provinsi</label>

                        </td>

                    </tr>
                    @for($i=2;$i<=10;$i++)
                        <tr>
                            <td id="kolom1baris{{$i}}jenis{{$jud}}" style="display: none">
                            </td>
                            <td id="kolom2baris{{$i}}jenis{{$jud}}"
                                style="display: none">{{ Form::text('produkunggulan'.$i.$bar.$jud,null,['class'=>'form-control','id' => 'produkunggulan'.$i.$bar.$jud]) }}
                            </td>
                            <td id="kolom3baris{{$i}}jenis{{$jud}}" style="display: none">
                                {{ Form::text('jumlahkulakperbulan'.$i.$bar.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'jumlahkulakperbulan'.$i.$bar.$jud
                                ]) }}
                            </td>
                            <td id="kolom4baris{{$i}}jenis{{$jud}}" style="display: none">
                                {{ Form::select('satuankulak'.$i.$bar.$jud,$satuan,null,[
                                    'class'=>'form-control select2','placeholder' => 'Pilih',
                                    'id' => 'satuankulak'.$i.$bar.$jud
                                    ]) }}
                            </td>
                            <td id="kolom5baris{{$i}}jenis{{$jud}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargakulak'.$i.$bar.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargakulak'.$i.$bar.$jud
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom6baris{{$i}}jenis{{$jud}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargajual'.$i.$bar.$jud,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargajual'.$i.$bar.$jud
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom7baris{{$i}}jenis{{$jud}}" style="display: none">
                                {{ Form::select('satuanjual'.$i.$bar.$jud,$satuan,null,[
                                    'class'=>'form-control select2','placeholder' => 'Pilih',
                                    'id' => 'satuanjual'.$i.$bar.$jud
                                    ]) }}
                            </td>
                            <td id="kolom8baris{{$i}}jenis{{$jud}}" style="display: none">
                                {{ Form::select('idsuplier'.$i.$bar.$jud,array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,
                                ['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'idsuplier'.$i.$bar.$jud]) }}
                            </td>
                            <td id="kolom9baris{{$i}}jenis{{$jud}}" style="display: none">
                                {{ Form::text('namasuplier'.$i.$bar.$jud,null,[
                                    'class'=>'form-control',
                                    'id' => 'namasuplier'.$i.$bar.$jud
                                ]) }}
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
