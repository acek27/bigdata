<!-- Kuesioner Bidang Pertanian -->

<div class="form-group">
    <label for="inputDescription">15. Apakah anda memiliki kegiatan dibidang pertanian?</label>
    <div class="col-md-1">
        <input onclick="checkpertanian(this.value)" class="form-group" name="pertanian" id="pertanian" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkpertanian(this.value)" class="form-group" name="pertanian" id="pertanian" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div id="divpertanian16" class="form-group">
    <label for="inputDescription">16. Isikan informasi jenis komoditas tanaman pertanian/perkebunan/hortikultura yang
        sedang anda kerjakan: (bisa mengisi lebih dari satu)</label><br>
        <label for="inputDescription"><font color="red"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 Ereng = 4.000 m<sup>2</sup>, 1 Ha = 10.000 m<sup>2</sup> , 1 Lokkek/petak = 1.000 m<sup>2</sup>, 1 Ereng = 4 Lokkek/petak </font> </label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 500px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis Tanaman</th>
                        <th>Luas Lahan Tanam</th>
                        <th>Masa Tanam Pertama</th>
                        <th>Masa Tanam Berikutnya</th>
                        <th>Kebutuhan Bibit/Benih</th>
                        <th>Harga Bibit/Benih per satuan</th>
                        <th>Produksi per Panen</th>
                        <th>Panen per Tahun</th>
                        <th>Operasional per Masa Tanam</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php($tani= 1)
                    @foreach($jenistanaman as $tanaman)
                        <tr>
                            <td>
                                <input onclick="checkjenispertanian()" name="idjenistanaman{{$tani}}"
                                       id="idjenistanaman{{$tani}}" value="{{$tanaman->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idjenistanaman{{$tani}}"
                                       class="form-check-label">{{$tani}}{{'. '}}{{$tanaman->jenistanaman}}</label>
                            </td>
                            <td id="kolom1tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('luastanam'.$tani,null,['class'=>'form-control','id' => 'luastanam'.$tani]) }}
                                <div class="input-group-append">
                                <span class="input-group-text">m<sup>2</sup></span>
                                <!-- {{ Form::select('satuanluas'.$tani,array('1' => 'Ereng', '2' => 'M2','3' => 'Ha'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'satuanluas'.$tani]) }} -->
                                </div>
                            </div>
                            </td>
                            <td id="kolom3tani{{$tani}}" style="display: none">
                                {{ Form::select('bulantanam'.$tani,array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                                    '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'bulantanam'.$tani]) }}
                            </td>
                            <td id="kolom4tani{{$tani}}" style="display: none">{{ Form::select('bulantanamselanjutnya'.$tani,array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                                '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'bulantanamselanjutnya'.$tani]) }}
                            </td>
                            <td id="kolom5tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kebutuhanbibit'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'kebutuhanbibit'.$tani
                                      ]) }}
                                      <div class="input-group-append">
                                      {{ Form::select('satuanbibit'.$tani,array('1' => 'Kg', '2' => 'Ikat','3' => 'Pcs'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'satuanbibit'.$tani]) }}
                                </div>
                            </div>
                            </td>
                            <td id="kolom7tani{{$tani}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargabibit'.$tani,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargabibit'.$tani
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom8tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kapasitaspanen'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'kapasitaspanen'.$tani
                                      ]) }}
                                   
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom9tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('panenpertahun'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'panenpertahun'.$tani
                                      ]) }}
                                      <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom10tani{{$tani}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionaltanam'.$tani,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionaltanam'.$tani
                                    ]) }}
                                </div>
                            </td>
                        </tr>
                        @php($tani++)
                    @endforeach
                    <tr>
                        <td>
                            <div class="input-group">
                                <input onclick="checkjenispertanian()" name="idjenistanaman{{$tani}}"
                                       id="idjenistanaman{{$tani}}" value="99"
                                       class="form-group-input" type="checkbox">
                                {{ Form::text('jenistanaman'.$tani,null,['disabled' =>'disabled','placeholder'=>'Lainnya','class'=>'form-control','id' => 'jenistanaman'.$tani]) }}
                            </div>
                            </td>
                            <td id="kolom1tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('luastanam'.$tani,null,['class'=>'form-control','id' => 'luastanam'.$tani]) }}
                                <div class="input-group-append">
                                <span class="input-group-text">M<sup>2</sup></span>
                                <!-- {{ Form::select('satuanluas'.$tani,array('1' => 'Ereng', '2' => 'M2','3' => 'Ha'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'satuanluas'.$tani]) }} -->
                                </div>
                            </div>
                            </td>
                            <td id="kolom3tani{{$tani}}" style="display: none">
                                {{ Form::select('bulantanam'.$tani,array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                                    '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'bulantanam'.$tani]) }}
                            </td>
                            <td id="kolom4tani{{$tani}}" style="display: none">{{ Form::select('bulantanamselanjutnya'.$tani,array('1' => 'Januari', '2' => 'Februari', '3' => 'Maret','4' => 'April','5' => 'Mei','6' => 'Juni','7' => 'Juli','8' => 'Agustus',
                                '9' => 'September','10' => 'Oktober','11' => 'Novemver','12' => 'Desember'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'bulantanamselanjutnya'.$tani]) }}
                            </td>
                            <td id="kolom5tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kebutuhanbibit'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'kebutuhanbibit'.$tani
                                      ]) }}
                                      <div class="input-group-append">
                                      {{ Form::select('satuanbibit'.$tani,array('1' => 'Kg', '2' => 'Ikat','3' => 'Pcs'),null,['class'=>'form-control select2','placeholder' => 'Pilih','id' => 'satuanbibit'.$tani]) }}
                                </div>
                            </div>
                            </td>
                            <td id="kolom7tani{{$tani}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('hargabibit'.$tani,null,[
                                        'class'=>'form-control',
                                        'id' => 'hargabibit'.$tani
                                    ]) }}
                                </div>
                            </td>
                            <td id="kolom8tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kapasitaspanen'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'kapasitaspanen'.$tani
                                      ]) }}
                                   
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom9tani{{$tani}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('panenpertahun'.$tani,null,[
                                          'class'=>'form-control',
                                          'id' => 'panenpertahun'.$tani
                                      ]) }}
                                      <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom10tani{{$tani}}" style="display: none">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('operasionaltanam'.$tani,null,[
                                        'class'=>'form-control',
                                        'id' => 'operasionaltanam'.$tani
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

<div id="divpertanian17" class="form-group">
    <label for="inputProjectLeader">17. Apakah anda memiliki Tanaman Tumpang Sari pada Pengelolaan Pertanian/Perkebunan anda?</label>
    <div class="col-md-12">
        <input onclick="tumpangsari(this.value)" class="form-group" name="punyatumpangsari" id="pengelolaanpertanian1" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-12">
        <input onclick="tumpangsari(this.value)" class="form-group" name="punyatumpangsari" id="pengelolaanpertanian2" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
    <div id="divtumpangsari" style="display: none" class="col-6">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px; width:750px">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Tanaman Tumpang Sari</th>
                        <th>Jenis Tanaman Inti</th>
                        <th>Produksi per Panen</th>
                        <th>Jumlah Panen pertanam</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($ts= 1)
                    @foreach($tanamantumpangsari as $tumpangsari)
                    <tr>
                            <td>
                                <input onclick="checktanamantumpang()" name="idtanamantumpang{{$ts}}"
                                       id="idtanamantumpang{{$ts}}" value="{{$tumpangsari->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="idtanamantumpang{{$ts}}"
                                       class="form-check-label">{{$tumpangsari->id}}{{'. '}}{{$tumpangsari->tumpangsari}}</label>
                            </td>
                            <td id="kolom1tanitumpang{{$ts}}" style="display: none">                         
                                    {{ Form::select('tanamaninti'.$ts,$tanamaninti,null,[
                                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                                'id' => 'tanamaninti'.$ts
                                                ]) }}
                            </td>
                            <td id="kolom2tanitumpang{{$ts}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kapasitaspanentumpang'.$ts,null,[
                                          'class'=>'form-control',
                                          'id' => 'kapasitaspanentumpang'.$ts
                                      ]) }}
                                   
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom3tanitumpang{{$ts}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('panenpertanamtumpang'.$ts,null,[
                                          'class'=>'form-control',
                                          'id' => 'panenpertanamtumpang'.$ts
                                      ]) }}
                                      <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
                                    </div>
                                    </div>
                            </td>
                           
                    </tr>
                    @php($ts++)
                    @endforeach
                    <tr>
                            <td>
                            <div class="input-group">
                                <input onclick="checktanamantumpang()" name="idtanamantumpang{{$ts}}"
                                       id="idtanamantumpang{{$ts}}" value="99"
                                       class="form-group-input" type="checkbox">
                                       {{ Form::text('jenistanamantumpang'.$ts,null,['disabled' =>'disabled','placeholder'=>'Lainnya','class'=>'form-control','id' => 'jenistanamantumpang'.$ts]) }}
                            </div>
                            </td>
                            <td id="kolom1tanitumpang{{$ts}}" style="display: none">                         
                                    {{ Form::select('tanamaninti'.$ts,$tanamaninti,null,[
                                                'class'=>'form-control select2','placeholder' => 'Pilih',
                                                'id' => 'tanamaninti'.$ts
                                                ]) }}
                            </td>
                            <td id="kolom2tanitumpang{{$ts}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('kapasitaspanentumpang'.$ts,null,[
                                          'class'=>'form-control',
                                          'id' => 'kapasitaspanentumpang'.$ts
                                      ]) }}
                                   
                                    <div class="input-group-append">
                                        <span class="input-group-text">Kg</span>
                                    </div>
                                    </div>
                            </td>
                            <td id="kolom3tanitumpang{{$ts}}" style="display: none">
                            <div class="input-group">
                                {{ Form::text('panenpertanamtumpang'.$ts,null,[
                                          'class'=>'form-control',
                                          'id' => 'panenpertanamtumpang'.$ts
                                      ]) }}
                                      <div class="input-group-append">
                                        <span class="input-group-text">Kali</span>
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

<div id="divpertanian18" class="form-group">
    <label for="inputProjectLeader">18. Bagaimana cara anda mengelola usaha pertanian anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="statuspengelolaan" id="pengelolaanpertanian1" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Dikelola sendiri (dengan atau tanpa pekerja)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="statuspengelolaan" id="pengelolaanpertanian2" value="2"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Dikelola orang lain (sistem kerjasama/bagi hasil)</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="statuspengelolaan" id="pengelolaanpertanian3" value="3"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Dikelola kelompok</label>
    </div>

</div>
<div id="divpertanian19" class="form-group">
    <label for="inputProjectLeader">19. Berapa jumlah pekerja tetap (dibayar) dalam usaha pertanian anda (tidak termasuk pemilik/pengelola)? isikan 0 (nol) jika tidak ada</label>
    <div class="col-md-12">
    <div class="row">
            <div class="col-md-2">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laki-Laki</label>
                    <div class="col-md-5">
                        {{ Form::number('buruhtanilaki',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                        'class'=>'form-control',
                        'id' => 'buruhtanilaki'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group row">
                    <label>Perempuan</label>
                    <div class="col-sm-5">
                    {{ Form::number('buruhtaniperempuan',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                        'class'=>'form-control',
                        'id' => 'buruhtaniperempuan'
                        ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="divpertanian20" class="form-group">
    <label for="inputProjectLeader">20. Apakah anda memiliki lahan pertanian yang belum ditanami?</label>
    <div class="row">
        <div class="col-md-1">
        &nbsp;&nbsp;&nbsp;<input onclick="nonproduktif(this.value)" class="form-group" name="lahannonproduktif" id="lahannonproduktifya" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
        </div>
        <div id="divnonpro" class="col-md-3" style="display:none">
        <div class="form-group row" >
                    <label>Berapa Luasnya?</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                    {{ Form::number('luaslahannonproduktif',null,['disabled' =>'disabled','style'=>'text-align:right', 'min'=>'0',
                        'class'=>'form-control',
                        'id' => 'luaslahannonproduktif'
                        ]) }}
                        <div class="input-group-append">
                                        <span class="input-group-text">m <sup>2</sup></span>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="col-md-1">
        <input class="form-group" onclick="nonproduktif(this.value)" name="lahannonproduktif" id="lahannonproduktiftidak" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
</div>
<div id="divpertanian21" class="form-group">
    <label for="inputProjectLeader">21. Bagaimana cara anda memperoleh bibit?</label>
    <div class="col-md-12">
        <input onclick="checkbibit(this.value)" class="form-group" name="statuspembibitan" id="bibit1" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Membuat sendiri (menyemai)</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkbibit(this.value)" class="form-group" name="statuspembibitan" id="bibit2" value="2"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Membeli</label>
    </div>

</div>
<div id="divpertanian22" class="form-group">
    <label for="inputProjectLeader">22. Jika membeli, Sebutkan :</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Suplier</label>
                    <div class="col-md-8">
                        {{ Form::text('suplierbibit',null,['disabled' =>'disabled',
                        'class'=>'form-control',
                        'id' => 'suplierbibit'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Desa/Kelurahan</label>
                    <div class="col-sm-6">
                        {{ Form::select('iddesasuplierbibit',$desa,null,['disabled' =>'disabled',
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'iddesasuplierbibit'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="divpertanian23" class="form-group">
    <label for="inputProjectLeader">23. Berapa Kebutuhan Pupuk untuk usaha pertanian anda? isikan 0 "nol" jika tidak menggunakan!</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                    <label>Pupuk
                        Organik&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Bokasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('bokasi',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'bokasi'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Pupuk Cair&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('pupukcair',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'pupukcair'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Ltr</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-4">
                    <label>Pupuk Anorganik&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Urea (Nitrogen)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('urea',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'urea'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;ZA (Nitrogen)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('za',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'za'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;TSP (Phosfor)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('tsp',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'tsp'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;KCl (Kalium)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('kcl',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'kcl'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="input-group">
                        <label>&nbsp;&nbsp;&nbsp;&nbsp;Ponska (NPK)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            {{ Form::number('npk',null,['required'=>'required','style'=>'text-align:right', 'min'=>'0',
                            'class'=>'form-control',
                            'id' => 'npk'
                            ]) }}
                            <div class="input-group-append">
                                <span class="input-group-text">Kg</span>
                            </div>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
</div>

<div id="divpertanian24" class="form-group">
    <label for="inputProjectLeader">24. Bagaimana cara anda memperoleh pupuk?</label>
    <div class="col-md-12">
        <input onclick="checkpupuk(this.value)" class="form-group" name="sumberpupuk" id="pupuk1" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Membeli</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkpupuk(this.value)" class="form-group" name="sumberpupuk" id="pupuk2" value="2"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Membuat sendiri</label>
    </div>

</div>
<div id="divpertanian25" class="form-group">
    <label for="inputProjectLeader">25. Jika membuat sendiri sebutkan apa saja yang dibuat?</label>
    <div class="col-md-8">
        {{ Form::text('pupukbuatan',null,['disabled' =>'disabled','class'=>'form-control','id' => 'pupukbuatan']) }}
    </div>
</div>
<div id="divpertanian26" class="form-group">
    <label for="inputProjectLeader">26. Jika membeli. sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nama Toko/Kios Pupuk&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-7">

                        {{ Form::text('namakios',null,['disabled' =>'disabled',
                        'class'=>'form-control',
                        'id' => 'namakios'
                        ]) }}

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <label>Desa/Kelurahan</label>
                    <div class="col-sm-6">
                        {{ Form::select('iddesakios',$desa,null,['disabled' =>'disabled',
                            'class'=>'form-control select2','placeholder' => 'Pilih',
                            'id' => 'iddesakios'
                            ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="divpertanian27" class="form-group">
    <label for="inputProjectLeader">27. Darimana sistem pegairan untuk usaha pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi1" value="1" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Sumur Bor / Pompa</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi2" value="2" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Irigasi Pertanian</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi3" value="3" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Sumberan / Mata air</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="sumberirigasi" id="sumberirigasi4" value="4" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Tadah Hujan</label>
    </div>

</div>
<div id="divpertanian28" class="form-group">
    <label for="inputProjectLeader">28. Bagaimana model penjualan hasil panen anda?</label>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan1"
               value="1" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Diijonkan (sebelum panen)</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan2"
               value="2" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Diolah menjadi bahan baku setengah jadi (contoh: gabah,bongol
            jagung,dsb)</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan3"
               value="3" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Diolah menjadi barang siap konsumsi (contoh: beras, jagung, pipil, dsb)</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan4"
               value="4" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Dijual ketengkulak (saat panen)</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan5"
               value="5" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Dijual ke selep / penggilingan padi</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan6"
               value="6" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Sebagian dijual dan sebagian disimpan/konsumsi sendiri</label>
    </div>
    <div class="col-md-12">
        <input onclick="checkmodelpenjualan(this.value)" class="form-group" name="modelpenjualan" id="modelpenjualan7"
               value="7" class="form-check-input"
               type="radio" required>
        <label class="form-check-label">Seluruhnya disimpan/konsumsi sendiri</label>
    </div>

</div>
<div id="divpertanian29" class="form-group">
    <label for="inputProjectLeader">29. Jika anda mengijonkan (tebasan), sebutkan:</label>
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;Nilai ijon sesuai luasan tanam&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            {{ Form::text('hargaijon',null,['disabled' =>'disabled',
                            'class'=>'form-control',
                            'id' => 'hargaijon'
                            ]) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label>Untuk Luasan</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            {{ Form::text('luasanijon',null,['disabled' =>'disabled',
                                'class'=>'form-control',
                                'id' => 'luasanijon'
                                ]) }}
                            <div class="input-group-append">
                                {{ Form::select('satuanijon',array('1' => 'Petak', '2' => 'Ereng', '3' => 'M2','4' => 'Ha'),null,['disabled' =>'disabled','class'=>'form-control select2','placeholder' => 'Pilih','id' => 'satuanijon']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="divpertanian30" class="form-group">
    <label for="inputProjectLeader">30. Kepada siapa anda menjual hasil produksi pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli1" value="1" class="form-check-input" type="radio" required>
        <label class="form-check-label">Pengijon dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli2" value="2" class="form-check-input" type="radio" required>
        <label class="form-check-label">Pengijon luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli3" value="3" class="form-check-input" type="radio" required>
        <label class="form-check-label">Tengkulak dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli4" value="4" class="form-check-input" type="radio" required>
        <label class="form-check-label">Tengkulak luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli5" value="5" class="form-check-input" type="radio" required>
        <label class="form-check-label">Toko/Pedagang/Pasar dalam kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli6" value="6" class="form-check-input" type="radio" required>
        <label class="form-check-label">Toko/Pedagang/Pasar luar kabupaten</label>
    </div>
    <div class="col-md-12">
        <input class="form-group" name="pembeli" id="pembeli7" value="7" class="form-check-input" type="radio" required>
        <label class="form-check-label">Industri (contoh:selep)</label>
    </div>
</div>

<div id="divpertanian31" class="form-group">
    <label for="inputProjectLeader">31. Bagaimana anda mengolah limbah produksi pertanian/perkebunan anda?</label>
    <div class="col-md-12">
        <input onclick="checklimbah(this.value)" class="form-group" name="pengolahanlimbahtani" id="limbah1" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Dibuang/Dibakar</label>
    </div>
    <div class="col-md-12">
        <input onclick="checklimbah(this.value)" class="form-group" name="pengolahanlimbahtani" id="limbah2" value="2"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Diolah</label>
    </div>
    <div class="col-md-12">
        <input onclick="checklimbah(this.value)" class="form-group" name="pengolahanlimbahtani" id="limbah3" value="3"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Dijual</label>
    </div>

</div>
<div id="divpertanian32" class="form-group">
    <label for="inputProjectLeader">32. Jika diolah, sebutkan untuk apa?</label>
    <div class="col-md-7">
        {{ Form::text('limbaholahtani',null,['disabled' =>'disabled','class'=>'form-control','id' => 'limbaholahtani']) }}
    </div>
</div>
<div id="divpertanian33" class="form-group">
    <label for="inputProjectLeader">33. Jika dijual, sebutkan:</label>
    <div class="form-check col-lg-12">

        <div class="col-md-6">
            <div class="form-group row">
                <label>&nbsp;&nbsp;Kapasitas Limbah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        {{ Form::text('kapasitaslimbahtani',null,['disabled' =>'disabled',
                        'class'=>'form-control',
                        'id' => 'kapasitaslimbahtani'
                        ]) }}
                        <div class="input-group-append">
                            <span class="input-group-text">Kg/Bulan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label>&nbsp;&nbsp;Harga jual limbah tanpa diolah</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        {{ Form::text('limbahtanijualtanpaolah',null,['disabled' =>'disabled',
                            'class'=>'form-control',
                            'id' => 'limbahtanijualtanpaolah'
                            ]) }}
                        <div class="input-group-append">
                            <span class="input-group-text">/Kg</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <label>&nbsp;&nbsp;Harga jual hasil olahan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <div class="col-sm-6">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp.</span>
                        </div>
                        {{ Form::text('limbahtanijualolah',null,['disabled' =>'disabled',
                            'class'=>'form-control',
                            'id' => 'limbahtanijualolah'
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

<div id="divpertanian34" class="form-group">
    <label for="inputProjectLeader">34. Pilihlah jenis sarana prasarana produksi pertanian (saprodi) pertanian yang
        dimiliki (bisa memilih lebih dari satu pilihan)</label>
    <div class="row">
        @foreach($jenissaprodi as $saprodi)
            <div class="form-check col-lg-6">
                <div class="row">
                    <div class="col-md-7">
                        <input name="idjenissaprodi{{$saprodi->id}}" id="idjenissaprodi{{$saprodi->id}}"
                               value="{{$saprodi->id}}"
                               class="form-group-input" type="checkbox">
                        <label for="idjenissaprodi{{$saprodi->id}}"
                               class="form-check-label">{{$saprodi->namasaprodi}}</label>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
