<!-- Kuesioner Bidang Perdagangan -->

<div class="form-group">
    <label for="inputDescription">11. Apakah anda memiliki usaha perdagangan?</label>
    <div class="col-md-1">
        <input class="form-group" name="perdagangan" id="perdagangan" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="perdagangan" id="perdagangan" value="0" class="form-check-input" type="radio">
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
    <label for="inputDescription">12. Pilihlah jenis usaha perdagangan anda dan isikan informasinya! (bisa mengisi lebih
        dari satu)</label>
</div>
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
                </tr>
                </thead>
                <tbody>
                @foreach($jenisusahadagang as $dagang)
                    <tr>
                        <td>
                            <input name="dagang{{$dagang->id}}" id="dagang{{$dagang->id}}" value="{{$dagang->id}}"
                                   class="form-group-input" type="checkbox">
                            <label for="dagang{{$dagang->id}}"
                                   class="form-check-label">{{$dagang->id}}{{'. '}}{{$dagang->jenisusahadagang}}</label>
                        </td>
                        <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
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
                            {{ Form::select('id',array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,['class'=>'form-control select2','id' => 'id']) }}
                        </td>
                        <td>
                            {{ Form::text('aspek',null,[
                                'class'=>'form-control',
                                'id' => 'aspek'
                            ]) }}
                        </td>

                    </tr>
                    @for($i=1;$i<=9;$i++)
                        <tr>
                            <td>
                            </td>
                            <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
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
                                {{ Form::select('id',array('1' => 'Dalam Kecamatan', '2' => 'Dalam Kabupaten', '3' => 'Luar Kabupaten'),null,['class'=>'form-control select2','id' => 'id']) }}
                            </td>
                            <td>
                                {{ Form::text('aspek',null,[
                                    'class'=>'form-control',
                                    'id' => 'aspek'
                                ]) }}
                            </td>

                        </tr>
                    @endfor
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<div class="form-group">
    <label for="inputProjectLeader">13. Siapa saja konsumen terbanyak dari 10 (sepuluh) produk diatas? (bisa memilih
        lebih dari satu)</label>
    <div class="row">
        <div class="form-check col-lg-12">
            <div class="col-md-3">
                <input name="konsumenproduk1" id="konsumenproduk1" value="1"
                       class="form-group-input" type="checkbox">
                <label for="konsumenproduk1" class="form-check-label">Konsumen / Pembeli Dalam Kecamatan</label>
            </div>
            <div class="col-md-3">
                <input name="konsumenproduk2" id="konsumenproduk2" value="1"
                       class="form-group-input" type="checkbox">
                <label for="konsumenproduk2" class="form-check-label">Konsumen / Pembeli Dalam Kabupaten</label>
            </div>
            <div class="col-md-3">
                <input name="konsumenproduk3" id="konsumenproduk3" value="1"
                       class="form-group-input" type="checkbox">
                <label for="konsumenproduk3" class="form-check-label">Konsumen / Pembeli Luar Kabupaten</label>
            </div>
            <div class="col-md-3">
                <input name="konsumenproduk4" id="konsumenproduk4" value="1"
                       class="form-group-input" type="checkbox">
                <label for="konsumenproduk4" class="form-check-label">Konsumen / Pembeli Luar Provinsi</label>
            </div>
        </div>

    </div>
</div>
