<!-- Kuesioner Bidang Jasa-->

<div class="form-group">
    <label for="inputDescription">51. Apakah anda memiliki kegiatan dibidang jasa?</label>
    <div class="col-md-1">
        <input class="form-group" name="jasa" id="jasa" value="1" class="form-check-input" type="radio">
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input class="form-group" name="jasa" id="jasa" value="0" class="form-check-input" type="radio">
        <label class="form-check-label">Tidak</label>
    </div>
</div>


<div class="form-group">
    <label for="inputProjectLeader">52. Bila anda bergerak dibidang usaha jasa, sebutkan:</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis jasa yang dilakukan</th>
                        <th>Rata-rata konsumen/minggu</th>
                        <th>Penghasilan rata-rata/bulan</th>
                        <th>Konsumen utama dalam usaha jasa anda</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=1;$i<=4;$i++)
                        <tr>
                            <td>
                                {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                            </td>
                            <td>
                                <div class="input-group">
                                    {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                                    <div class="input-group-append">
                                        <span class="input-group-text">Orang</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Rp.</span>
                                    </div>
                                    {{ Form::text('aspek',null,['class'=>'form-control','id' => 'aspek']) }}
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-md-3">
                                        <input name="jasa1{{$i}}" id="jasa1{{$i}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="jasa1{{$i}}" class="form-check-label">Dalam Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="jasa2{{$i}}" id="jasa2{{$i}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="jasa2{{$i}}" class="form-check-label">Luar Kabupaten</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="jasa3{{$i}}" id="jasa3{{$i}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="jasa3{{$i}}" class="form-check-label">Luar Provinsi</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input name="jasa4{{$i}}" id="jasa4{{$i}}" value="1"
                                               class="form-group-input" type="checkbox">
                                        <label for="jasa4{{$i}}" class="form-check-label">Luar Negeri</label>
                                    </div>
                                </div>
                            </td>
                            <td>

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

