<!-- Kuesioner Bidang Jasa-->

<div class="form-group">
    <label for="inputDescription">58. Apakah anda memiliki kegiatan dibidang jasa?</label>
    <div class="col-md-1">
        <input onclick="checkjasa(this.value)" class="form-group" name="jasa" id="jasa" value="1"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Ya</label>
    </div>
    <div class="col-md-1">
        <input onclick="checkjasa(this.value)" class="form-group" name="jasa" id="jasa" value="0"
               class="form-check-input" type="radio" required>
        <label class="form-check-label">Tidak</label>
    </div>
</div>

<div id="divjasa">
<div class="form-group">
    <label for="inputProjectLeader">59. Bila anda bergerak dibidang usaha jasa, sebutkan:</label>
    <div class="col-12">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                    <tr>
                        <th>Jenis/Nama jasa yang dilakukan</th>
                        <th>Konsumen/minggu</th>
                        <th>Penghasilan rata-rata/bulan</th>
                        <th>Dari mana asal konsumen utama dalam usaha jasa anda (boleh lebih dari satu)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($j=1;$j<=4;$j++)
                        <tr>
                            <td>
                                {{ Form::text('jenisjasa'.$j,null,['class'=>'form-control','id' => 'jenisjasa'.$j]) }}
                            </td>
                            <td>
                                <div class="input-group">
                                    {{ Form::text('konsumenperminggu'.$j,null,['class'=>'form-control','id' => 'konsumenperminggu'.$j]) }}
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
                                    {{ Form::text('brutoperbulan'.$j,null,['class'=>'form-control','id' => 'brutoperbulan'.$j]) }}
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <!--     <div class="col-md-3"> -->
                                    <input name="konsumendalamkabupaten{{$j}}" id="konsumendalamkabupaten{{$j}}"
                                           value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="konsumendalamkabupaten{{$j}}" class="form-check-label">Dalam Kabupaten&nbsp;&nbsp;&nbsp;</label>
                                    <!-- </div> -->
                                    <!-- <div class="col-md-3"> -->
                                    <input name="konsumenluarkabupaten{{$j}}" id="konsumenluarkabupaten{{$j}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="konsumenluarkabupaten{{$j}}" class="form-check-label">Luar Kabupaten&nbsp;&nbsp;&nbsp;</label>
                                    <!-- </div> -->
                                    <!-- <div class="col-md-3"> -->
                                    <input name="konsumenluarprovinsi{{$j}}" id="konsumenluarprovinsi{{$j}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="konsumenluarprovinsi{{$j}}" class="form-check-label">Luar Provinsi&nbsp;&nbsp;&nbsp;</label>
                                    <!-- </div> -->
                                    <!-- <div class="col-md-3"> -->
                                    <input name="konsumenluarnegeri{{$j}}" id="konsumenluarnegeri{{$j}}" value="1"
                                           class="form-group-input" type="checkbox">
                                    <label for="konsumenluarnegeri{{$j}}" class="form-check-label">Luar Negeri&nbsp;&nbsp;&nbsp;</label>
                                    <!-- </div> -->
                                </div>
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


<div class="form-group">
    <label for="inputProjectLeader">60. Berapa total pekerja tetap (dibayar) dari usaha industri anda (tidak termasuk pemilik/pengelola)? isikan 0 'nol' jika tidak ada pekerja/karyawan</label>
    <div class="col-md-12">
    <div class="row">
            <div class="col-md-2">
                <div class="form-group row">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laki-Laki</label>
                    <div class="col-md-5">
                        {{ Form::number('buruhjasalaki',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                        'class'=>'form-control',
                        'id' => 'buruhjasalaki'
                        ]) }}
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group row">
                    <label>Perempuan</label>
                    <div class="col-sm-5">
                    {{ Form::number('buruhjasaperempuan',null,['style'=>'text-align:right','min'=>'0','required'=>'required',
                        'class'=>'form-control',
                        'id' => 'buruhjasaperempuan'
                        ]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>