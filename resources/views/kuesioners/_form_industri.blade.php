<!-- Kuesioner Bidang Industri -->
<div class="form-group">
    <label for="inputDescription">8. Apakah anda memiliki usaha industri?</label>
    <div class="col-md-1">
        <input class="form-group" name="industri" id="industri" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="industri" id="industri" value="0" class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>
<div class="form-group">
    <label for="inputDescription">Jika Ya, silahkan jawab pertanyaan no.9 dan no.10!</label>
    <br>
    <label for="inputDescription">Jika Tidak, silahkan lanjutkan kebidang selanjutnya tanpa menekan tombol
        simpan!</label>
</div>


<div class="form-group">
    <label for="inputDescription">9. Pilihlah jenis usaha pembuatan/industri anda dan isikan keterangannya : (bisa
        mengisi lebih dari satu)</label>
</div>
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
                    <th>Harga Jual Produk Hasil Produksi</th>
                    <th>Satuan Jual</th>
                    <th>Biaya Operasional Produksi/Bulan</th>

                </tr>
                </thead>
                <tbody>
                @foreach($jenisindustri as $industri)
                    <tr>
                        <td>
                            <input name="idjenisusaha{{$industri->id}}" id="JS{{$industri->id}}"
                                   value="{{$industri->id}}"
                                   class="form-group-input" type="checkbox">
                            <label for="JS{{$industri->id}}"
                                   class="form-check-label">{{$industri->id}}{{'. '}}{{$industri->jenisindustri}}</label>
                        </td>
                        <td>{{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                        </td>
                        <td>
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
                        </td>
                        <td>{{ Form::select('id',$bahanbaku,null,[
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
                        <td>
                            {{ Form::select('id',$satuan,null,[
                           'class'=>'form-control select2',
                           'id' => 'id'
                           ]) }}
                        </td>
                        <td>
                            {{ Form::select('id', $suplier,null,[
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
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <div class="input-group">
                            <input name="idjenisusaha11" id="JS11" value="11"
                                   class="form-group-input" type="checkbox">
                            {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                        </div>
                    </td>
                    <td>
                        {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                    </td>
                    <td>
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
                    </td>
                    <td>{{ Form::select('id',$bahanbaku,null,[
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
                    <td>
                        {{ Form::select('id',$satuan,null,[
                       'class'=>'form-control select2',
                       'id' => 'id'
                       ]) }}
                    </td>
                    <td>
                        {{ Form::select('id', $suplier,null,[
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
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<!-- <div class="row">
    <div class="col-sm-12">

        <div class="form-group">
            <label for="inputProjectLeader">9. Pilihlah jenis usaha pembuatan/industri anda dan isikan keterangannya : (bisa mengisi lebih dari satu)</label>
            <div class="row">
                @foreach($jenisindustri as $industri)
    <div class="form-check col-lg-12">
        <div class="row">
            <div class="col-lg-2">
                <input name="idjenisusaha{{$industri->id}}" id="JS{{$industri->id}}" value="{{$industri->id}}"
                                       class="form-group-input" type="checkbox">
                                <label for="JS{{$industri->id}}" class="form-check-label">{{$industri->jenisindustri}}</label>
                            </div>
                            <div class="col-lg-2">
                            {{ Form::label('aspek', 'Produk') }}
    {{ Form::text('aspek',null,[
        'class'=>'form-control',
        'id' => 'aspek'
    ]) }}
        </div>
        <div class="col-lg-2">
{{ Form::label('aspek', 'Kapasitas Produksi/Bulan') }}
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
        <div class="col-lg-1,5">
{{ Form::label('aspek', 'Bahan Baku Utama') }}
    {{ Form::select('id',$bahanbaku,null,[
    'class'=>'form-control select2',
    'id' => 'id'
    ]) }}
        </div>
        <div class="col-lg-2">
{{ Form::label('aspek', 'Kebutuhan/Bulan') }}
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
        <div class="col-lg-2">
{{ Form::label('aspek', 'Harga Kulak/Satuan') }}
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
        <div class="col-lg-2">
{{ Form::label('aspek', 'Asal Suplier') }}
    {{ Form::select('id', $suplier,null,[
    'class'=>'form-control select2',
    'id' => 'id'
    ]) }}
        </div>
        <div class="col-lg-2">
{{ Form::label('aspek', 'Harga Jual/Satuan') }}
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
        <div class="col-lg-2">
{{ Form::label('aspek', 'Biaya Operasional Produksi/Bulan') }}
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
@endforeach
    </div>
</div>

</div>
</div> -->

<div class="row">
    <div class="col-sm-12">
        <!-- checkbox -->
        <div class="form-group">
            <label for="inputProjectLeader">10. Kemana daerah pemasaran produk yang anda produksi? (bisa memilih lebih
                dari satu pilihan)</label>
            <div class="row">
                <div class="form-check col-lg-12">
                    <div class="col-md-3">
                        <input name="dalamkabupaten" id="dalamkabupaten" value="1"
                               class="form-group-input" type="checkbox">
                        <label for="dalamkabupaten" class="form-check-label">Dalam Kabupaten</label>
                    </div>
                    <div class="col-md-3">
                        <input name="luarkabupaten" id="luarkabupaten" value="1"
                               class="form-group-input" type="checkbox">
                        <label for="luarkabupaten" class="form-check-label">Luar Kabupaten</label>
                    </div>
                    <div class="col-md-3">
                        <input name="luarprovinsi" id="luarprovinsi" value="1"
                               class="form-group-input" type="checkbox">
                        <label for="luarprovinsi" class="form-check-label">Luar Provinsi</label>
                    </div>
                    <div class="col-md-3">
                        <input name="luarnegeri" id="luarnegeri" value="1"
                               class="form-group-input" type="checkbox">
                        <label for="luarnegeri" class="form-check-label">Luar Negeri</label>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
