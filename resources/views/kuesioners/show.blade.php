@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush
@section('content')
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
            <p>
                <i class="mdi-navigation-check"></i> {!! session()->get('flash_notification.message') !!}
            </p>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">DATA DASAR</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputEstimatedBudget">NIK</label>
                        <input value="{{$penduduk->nik}}" type="text" id="inputSpentBudget" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Nama</label>
                        <input value="{{$penduduk->nama}}" type="text" id="inputSpentBudget" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Alamat</label>
                        <input type="text" value="{{$penduduk->alamat}}" id="inputEstimatedDuration" class="form-control" disabled>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stkuesdasar >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Kuesioner Dasar</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stkuesdasar  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpankuesionerdasar')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanKD'] )  }}
                    {!! Form::close() !!}
                </div>
            @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row"> <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
        <div class="col-md-12">
            <div class="card @if($stindustri >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Industri</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stindustri  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangindustri')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form_industri')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanindustri'] )  }}
                    {!! Form::close() !!}
                </div>
                @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stperdagangan >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Perdagangan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stperdagangan  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangperdagangan')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form_perdagangan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpandagang'] )  }}
                    {!! Form::close() !!}
                </div>
            @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stpertanian >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Pertanian/Perkebunan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stpertanian  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangpertanian')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form_pertanian')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanpertanian'] )  }}
                    {!! Form::close() !!}
                </div>
            @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stternak >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Peternakan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stternak  == 0)
                    <div class="card-body">
                        {!! Form::open(['url'=>route('simpanbidangpeternakan')]) !!}
                        <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                        @include('kuesioners._form_peternakan')
                        {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary saveternak'] )  }}
                        {!! Form::close() !!}
                    </div>
            @endif
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stperikanan >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Perikanan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stperikanan  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangperikanan')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form_perikanan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanperikanan'] )  }}
                    {!! Form::close() !!}
                </div>
            @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card @if($stjasa >= 1) card-success collapsed-card @else card-primary @endif  ">
                <div class="card-header">
                    <h3 class="card-title">Bidang Jasa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                @if($stjasa  == 0)
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangjasa')]) !!}
                    <input type="text" name="nik" value="{{$penduduk->nik}}" hidden>
                    @include('kuesioners._form_jasa')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanjasa'] )  }}
                    {!! Form::close() !!}
                </div>
            @endif
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>

        $(function () {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true
            });
        });

        
// KUESIONER DASAR

   
        function check() {
            var i = 1;
            var total = {{$bidangusahapekerjaan->count('id')}};
            for (i = 1; i <= total; i++) {
                var id = 'bu' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    // $('#idstatuspekerjaan' + i).val('1');
                    $('#div' + i).show();
                    document.getElementById("idstatuspekerjaan"+i).required = true;
                    document.getElementById("tidakpunyapekerjaan").required = false;
                } else {
                    $('#div' + i).hide();
                    $('#idstatuspekerjaan' + i).val('');
                    
                }
            }

        }

        function checkaset() {
            var i = 1;
            var total = {{$asetusaha->count('id')}};
            for (i = 1; i <= total; i++) {
                var id = 'idasetusaha' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divaset' + i).show();
                    var input = document.getElementById ("jumlahaset"+i);
                    input.focus ();
                    document.getElementById("jumlahaset"+i).required = true;
                    document.getElementById("tidakpunyaaset").required = false;
                } else {
                    $('#divaset' + i).hide();
                    $('#jumlahaset' + i).val('');
                }
            }
        }

        function checksda(hasil) {
            if (hasil == 1) {
                $("#namasumberdaya").prop("disabled", false);
                $("#panenpertahun").prop("disabled", false);
                $("#hasilperpanen").prop("disabled", false);
                document.getElementById("namasumberdaya").required = true;
                document.getElementById("panenpertahun").required = true;
                document.getElementById("hasilperpanen").required = true;
                var input = document.getElementById ("namasumberdaya");
                    input.focus ();
            } else {
                $("#namasumberdaya").prop("disabled", true);
                $("#panenpertahun").prop("disabled", true);
                $("#hasilperpanen").prop("disabled", true);
                document.getElementById("namasumberdaya").required = false;
                document.getElementById("panenpertahun").required = false;
                document.getElementById("hasilperpanen").required = false;
                $('#namasumberdaya').val('');
                $('#panenpertahun').val('');
                $('#hasilperpanen').val('');
                var input2 = document.getElementById ("pendapatanperbulan");
                    input2.focus ();
            }

        }

        function checkbank(bank) {
            if (bank == 1) {
                $('#idjenisperbankan1').prop('disabled', false);
                $('#idjenisperbankan2').prop('disabled', false);
                $('#idjenisperbankan3').prop('disabled', false);
                $('#idjenisperbankan4').prop('disabled', false);
                $('#idjenisperbankan5').prop('disabled', false);
                $('#idjenisperbankan6').prop('disabled', false);
                // $('#idbesarankredit').prop('disabled', false);
                // $('#lamakredit').prop('disabled', false);
                document.getElementById('idjenisperbankan1').required = true;
                document.getElementById('idjenisperbankan2').required = true;
                document.getElementById('idjenisperbankan3').required = true;
                document.getElementById('idjenisperbankan4').required = true;
                document.getElementById('idjenisperbankan5').required = true;
                document.getElementById('idjenisperbankan6').required = true;
            } else {
                $('#idjenisperbankan1').prop('disabled', true);
                $('#idjenisperbankan2').prop('disabled', true);
                $('#idjenisperbankan3').prop('disabled', true);
                $('#idjenisperbankan4').prop('disabled', true);
                $('#idjenisperbankan5').prop('disabled', true);
                $('#idjenisperbankan6').prop('disabled', true);
                $('#idbesarankredit').prop('disabled', true);
                $('#lamakredit').prop('disabled', true);
                $('#idbesarankredit').val('');
                $('#lamakredit').val('');
                uncheck();
            }

        }

        function uncheck() {
            var i = 1;
            var total = {{$perbankan->count('id')}};
            for (i = 1; i <= total; i++) {
                $('#idjenisperbankan' + i).prop('checked', false);
                $('#namabank' + i).val('');
                $('#cabang' + i).val('');
                $('#divnamabank' + i).hide();
                $('#divalamatbank' + i).hide();
            }
        }

        function checkjenisbank() {
            var i = 1;
            var o = 1;
            var total = {{$perbankan->count('id')}};
            for (i = 1; i <= total; i++) {
                var id = 'idjenisperbankan' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divnamabank' + i).show();
                    $('#divalamatbank' + i).show();
                    document.getElementById("namabank"+i).required = true;
                    document.getElementById("cabang"+i).required = true;
                    document.getElementById('idjenisperbankan1').required = false;
                    document.getElementById('idjenisperbankan2').required = false;
                    document.getElementById('idjenisperbankan3').required = false;
                    document.getElementById('idjenisperbankan4').required = false;
                    document.getElementById('idjenisperbankan5').required = false;
                    document.getElementById('idjenisperbankan6').required = false;
                    var input = document.getElementById ("namabank"+i);
                    input.focus ();
                } else {
                    $('#divnamabank' + i).hide();
                    $('#divalamatbank' + i).hide();
                    $('#namabank' + i).val('');
                    $('#cabang' + i).val('');
                    $('#idbesarankredit').val('');
                    $('#lamakredit').val('');
                    document.getElementById("namabank"+i).required = false;
                    document.getElementById("cabang"+i).required = false;
                    $('#idbesarankredit').prop('disabled', true);
                    $('#lamakredit').prop('disabled', true);
                    document.getElementById('idbesarankredit').required = false;
                    document.getElementById('lamakredit').required = false;
                }
            }

            for (o= 3; o <= total; o++) {
                var idm = 'idjenisperbankan' + o;
                var check2 = document.getElementById(idm)
                if (check2.checked === true) {
                    $('#idbesarankredit').prop('disabled', false);
                    $('#lamakredit').prop('disabled', false);
                    document.getElementById('idbesarankredit').required = true;
                    document.getElementById('lamakredit').required = true;
                } 
            }
            
        }

        $(document).ready(function () {
            $('#idbesarankredit').change(function () {
                var input = document.getElementById ("lamakredit");
                    input.focus ();
            });
        });

// BIDANG INDUSTRI
        function checkjenisindustri() {
            var i = 1;
            var totalindustri = {{$jenisindustri->count('id')}};
            for (i = 1; i <= totalindustri + 1; i++) {
                var id = 'idjenisindustri1bar' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 0; a <= 13; a++) {
                        for (x = 1; x <= 3; x++) {
                        $('#kolom' + a + 'baris' + x +'industri' + i).show();
                        $('#namaproduk'+ x + 'bar' + i).prop('disabled', false);
                        $('#produksiperbulan'+ x + 'bar' + i).prop('disabled', false);
                        $('#satuanproduksi'+ x + 'bar' + i).prop('disabled', false);
                        $('#idbahanbaku'+ x + 'bar' + i).prop('disabled', false);
                        $('#kebutuhanperbulan'+ x + 'bar' + i).prop('disabled', false);
                        $('#satuanbahanbaku'+ x + 'bar' + i).prop('disabled', false);
                        $('#hargakulakbahan'+ x + 'bar' + i).prop('disabled', false);
                        $('#idsuplier'+ x + 'bar' + i).prop('disabled', false);
                        $('#namasuplier'+ x + 'bar' + i).prop('disabled', false);
                        $('#hargajualproduk'+ x + 'bar' + i).prop('disabled', false);
                        $('#operasionalperbulan'+ x + 'bar' + i).prop('disabled', false);
                        $('#omsetperbulan'+ x + 'bar' + i).prop('disabled', false);
                        }
                    }
                    $("#jenisindustri1bar" + i).prop("disabled", false);
                    
                } else {
                    for (a = 1; a <= 3; a++) {
                        for (x = 0; x <= 13; x++) {
                        $('#kolom' + x +'baris' + a + 'industri' + i).hide();
                        }
                        $('#jenisindustri'+ a + 'bar' + i).val('');
                        $('#namaproduk'+ a + 'bar' + i).val('');
                        $('#namaproduk'+ a + 'bar' + i).prop('disabled', true);
                        $('#produksiperbulan'+ a + 'bar' + i).val('');
                        $('#produksiperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanproduksi'+ a + 'bar' + i).val('');
                        $('#satuanproduksi'+ a + 'bar' + i).prop('disabled', true);
                        $('#idbahanbaku'+ a + 'bar' + i).val('');
                        $('#idbahanbaku'+ a + 'bar' + i).prop('disabled', true);
                        $('#kebutuhanperbulan'+ a + 'bar' + i).val('');
                        $('#kebutuhanperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanbahanbaku'+ a + 'bar' + i).val('');
                        $('#satuanbahanbaku'+ a + 'bar' + i).prop('disabled', true);
                        $('#hargakulakbahan'+ a + 'bar' + i).val('');
                        $('#hargakulakbahan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuankulak'+ a + 'bar' + i).val('');
                        $('#satuankulak'+ a + 'bar' + i).prop('disabled', true);
                        $('#idsuplier'+ a + 'bar' + i).val('');
                        $('#idsuplier'+ a + 'bar' + i).prop('disabled', true);
                        $('#namasuplier'+ a + 'bar' + i).val('');
                        $('#namasuplier'+ a + 'bar' + i).prop('disabled', true);
                        $('#hargajualproduk'+ a + 'bar' + i).val('');
                        $('#hargajualproduk'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanjual'+ a + 'bar' + i).val('');
                        $('#satuanjual'+ a + 'bar' + i).prop('disabled', true);
                        $('#operasionalperbulan'+ a + 'bar' + i).val('');
                        $('#operasionalperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#omsetperbulan'+ a + 'bar' + i).val('');
                        $('#omsetperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#pemasarandalamkabupaten'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarnegeri'+ a + 'bar' + i).prop('checked', false);
                    }
                    $("#jenisindustri1bar" + i).prop("disabled", true);
                }
            }
        }

        function checkindustri(industri) {
            if (industri == 1) {
                $('#divjenisindustri1').show();
                $('#divjenisindustri2').show();
                $('#simpanindustri').show();
                $('#buruhindustrilaki').prop('disabled', false);
                $('#buruhindustriperempuan').prop('disabled', false);
            } else {
                $('#divjenisindustri1').hide();
                $('#divjenisindustri2').hide();
                $('#simpanindustri').hide();
                $('#buruhindustrilaki').prop('disabled', true);
                $('#buruhindustriperempuan').prop('disabled', true);
                var i = 1;
                var totalindustri = {{$jenisindustri->count('id')}};
                for (i = 1; i <= totalindustri + 1; i++) {
                    $('#idjenisindustri1bar' + i).prop('checked', false);
                    for (a = 1; a <= 3; a++) {
                        for (x = 0; x <= 13; x++) {
                        $('#kolom' + x + 'baris' + a + 'industri' + i).hide();
                        }
                        $('#jenisindustri'+ a + 'bar' + i).val('');
                        $('#namaproduk'+ a + 'bar' + i).val('');
                        $('#namaproduk'+ a + 'bar' + i).prop('disabled', true);
                        $('#produksiperbulan'+ a + 'bar' + i).val('');
                        $('#produksiperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanproduksi'+ a + 'bar' + i).val('');
                        $('#satuanproduksi'+ a + 'bar' + i).prop('disabled', true);
                        $('#idbahanbaku'+ a + 'bar' + i).val('');
                        $('#idbahanbaku'+ a + 'bar' + i).prop('disabled', true);
                        $('#kebutuhanperbulan'+ a + 'bar' + i).val('');
                        $('#kebutuhanperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanbahanbaku'+ a + 'bar' + i).val('');
                        $('#satuanbahanbaku'+ a + 'bar' + i).prop('disabled', true);
                        $('#hargakulakbahan'+ a + 'bar' + i).val('');
                        $('#hargakulakbahan'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuankulak'+ a + 'bar' + i).val('');
                        $('#satuankulak'+ a + 'bar' + i).prop('disabled', true);
                        $('#idsuplier'+ a + 'bar' + i).val('');
                        $('#idsuplier'+ a + 'bar' + i).prop('disabled', true);
                        $('#namasuplier'+ a + 'bar' + i).val('');
                        $('#namasuplier'+ a + 'bar' + i).prop('disabled', true);
                        $('#hargajualproduk'+ a + 'bar' + i).val('');
                        $('#hargajualproduk'+ a + 'bar' + i).prop('disabled', true);
                        $('#satuanjual'+ a + 'bar' + i).val('');
                        $('#satuanjual'+ a + 'bar' + i).prop('disabled', true);
                        $('#operasionalperbulan'+ a + 'bar' + i).val('');
                        $('#operasionalperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#omsetperbulan'+ a + 'bar' + i).val('');
                        $('#omsetperbulan'+ a + 'bar' + i).prop('disabled', true);
                        $('#pemasarandalamkabupaten'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi'+ a + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarnegeri'+ a + 'bar' + i).prop('checked', false);
                    }
                }
            }

        }
// Tidak Bisa dengan Perulangan (Manual)
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku1bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak1bar11').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku2bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak2bar11').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanbahanbaku3bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuankulak3bar11').val(gg);
            });
        });

// Tidak Bisa dengan Perulangan (Manual)
        $(document).ready(function () {
                    $('#satuanproduksi1bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar1').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar1').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar2').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar2').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar3').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar3').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar4').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar4').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar5').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar5').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar6').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar6').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar7').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar7').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar8').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar8').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar9').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar9').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar10').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar10').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi1bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual1bar11').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi2bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual2bar11').val(gg);
            });
        });
        $(document).ready(function () {
                    $('#satuanproduksi3bar11').change(function () {
                    var gg = $(this).val();
                    $('#satuanjual3bar11').val(gg);
            });
        });

// BIDANG PERDAGANGAN
        function checkjenisdagang() {
            var i = 1;
            var totaldagang = {{$jenisusahadagang->count('id')}};
            for (i = 1; i <= totaldagang + 1; i++) {
                var id = 'idjenisusahadagang1bar' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (x = 1; x <= 9; x++) {
                        for (a = 1; a <= 10; a++) {
                            $('#kolom' + x + 'baris' + a + 'jenis' + i).show();
                            $('#produkunggulan' + a + 'bar' + i).prop('disabled', false);
                            $('#jumlahkulakperbulan' + a + 'bar' + i).prop('disabled', false);
                            $('#satuankulak' + a + 'bar' + i).prop('disabled', false);
                            $('#hargakulak' + a + 'bar' + i).prop('disabled', false);
                            $('#hargajual' + a + 'bar' + i).prop('disabled', false);
                            $('#satuanjual' + a + 'bar' + i).prop('disabled', false);
                            $('#idsuplier' + a + 'bar' + i).prop('disabled', false);
                            $('#namasuplier' + a + 'bar' + i).prop('disabled', false);
                        }
                    }
                    $("#jenisusahadagang1bar" + i).prop("disabled", false);
                } else {
                    for (x = 1; x <= 10; x++) {
                        for (a = 1; a <= 9; a++) {
                            $('#kolom' + a + 'baris' + x + 'jenis' + i).hide();
                        }
                        $('#jenisusahadagang' + x + 'bar' + i).val('');
                        $('#produkunggulan' + x + 'bar' + i).val('');
                        $('#produkunggulan' + x + 'bar' + i).prop('disabled', true);
                        $('#jumlahkulakperbulan' + x + 'bar' + i).val('');
                        $('#jumlahkulakperbulan' + x + 'bar' + i).prop('disabled', true);
                        $('#satuankulak' + x + 'bar' + i).val('');
                        $('#satuankulak' + x + 'bar' + i).prop('disabled', true);
                        $('#hargakulak' + x + 'bar' + i).val('');
                        $('#hargakulak' + x + 'bar' + i).prop('disabled', true);
                        $('#hargajual' + x + 'bar' + i).val('');
                        $('#hargajual' + x + 'bar' + i).prop('disabled', true);
                        $('#satuanjual' + x + 'bar' + i).val('');
                        $('#satuanjual' + x + 'bar' + i).prop('disabled', true);
                        $('#idsuplier' + x + 'bar' + i).val('');
                        $('#idsuplier' + x + 'bar' + i).prop('disabled', true);
                        $('#namasuplier' + x + 'bar' + i).val('');
                        $('#namasuplier' + x + 'bar' + i).prop('disabled', true);
                        $('#pemasarandalamkabupaten' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarnegeri' + x + 'bar' + i).prop('checked', false);
                    }
                    $("#jenisusahadagang1bar" + i).prop("disabled", true);
                }
            }
        }

        function checkdagang(dagang) {
            if (dagang == 1) {
                $('#divjenisdagang1').show();
                $('#divjenisdagang2').show();
                $('#simpandagang').show();
                $('#buruhdaganglaki').prop('disabled', false);
                $('#buruhdagangperempuan').prop('disabled', false);
            } else {
                $('#divjenisdagang1').hide();
                $('#divjenisdagang2').hide();
                $('#simpandagang').hide();
                $('#buruhdaganglaki').prop('disabled', true);
                $('#buruhdagangperempuan').prop('disabled', true);
                var i = 1;
                var totaldagang = {{$jenisusahadagang->count('id')}};
                for (i = 1; i <= totaldagang + 1; i++) {
                    $('#idjenisusahadagang1bar' + i).prop('checked', false);
                    for (x = 1; x <= 10; x++) {
                        for (a = 1; a <= 9; a++) {
                            $('#kolom' + a + 'baris' + x + 'jenis' + i).hide();
                        }
                        $('#jenisusahadagang' + x + 'bar' + i).val('');
                        $('#produkunggulan' + x + 'bar' + i).val('');
                        $('#produkunggulan' + x + 'bar' + i).prop('disabled', true);
                        $('#jumlahkulakperbulan' + x + 'bar' + i).val('');
                        $('#jumlahkulakperbulan' + x + 'bar' + i).prop('disabled', true);
                        $('#satuankulak' + x + 'bar' + i).val('');
                        $('#satuankulak' + x + 'bar' + i).prop('disabled', true);
                        $('#hargakulak' + x + 'bar' + i).val('');
                        $('#hargakulak' + x + 'bar' + i).prop('disabled', true);
                        $('#hargajual' + x + 'bar' + i).val('');
                        $('#hargajual' + x + 'bar' + i).prop('disabled', true);
                        $('#satuanjual' + x + 'bar' + i).val('');
                        $('#satuanjual' + x + 'bar' + i).prop('disabled', true);
                        $('#idsuplier' + x + 'bar' + i).val('');
                        $('#idsuplier' + x + 'bar' + i).prop('disabled', true);
                        $('#namasuplier' + x + 'bar' + i).val('');
                        $('#namasuplier' + x + 'bar' + i).prop('disabled', true);
                        $('#pemasarandalamkabupaten' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi' + x + 'bar' + i).prop('checked', false);
                        $('#pemasaranluarnegeri' + x + 'bar' + i).prop('checked', false);
                    }
                }
            }

        }

// BIDANG PERTANIAN
        function checkpertanian(pertanian) {
            if (pertanian == 1) {
                for (a = 14; a <= 34; a++) {
                    $('#divpertanian' + a).show();
                }
                $('#simpanpertanian').show();
            } else {
                for (a = 14; a <= 34; a++) {
                    $('#divpertanian' + a).hide();
                }
                $('#simpanpertanian').hide();
                var i = 1;
                var totaltanaman = {{$jenistanaman->count('id')}};
                for (i = 1; i <= totaltanaman + 1; i++) {
                    $('#idjenistanaman' + i).prop('checked', false);
                    for (o = 1; o <= 10; o++) {
                        $('#kolom' + o + 'tani' + i).hide();
                        $('#statuspengelolaan' + o).prop('checked', false);
                        $('#statuspembibitan' + o).prop('checked', false);
                        $('#sumberpupuk' + o).prop('checked', false);
                        $('#sumberirigasi' + o).prop('checked', false);
                        $('#modelpenjualan' + o).prop('checked', false);
                        $('#pembeli' + o).prop('checked', false);
                        $('#pengolahanlimbahtani' + o).prop('checked', false);
                    }
                    $('#jenistanaman' + i).val('');
                    $('#luastanam' + i).val('');
                    $('#satuanluas' + i).val('');
                    $('#bulantanam' + i).val('');
                    $('#bulantanamselanjutnya' + i).val('');
                    $('#kebutuhanbibit' + i).val('');
                    $('#satuanbibit' + i).val('');
                    $('#hargabibit' + i).val('');
                    $('#kapasitaspanen' + i).val('');
                    $('#panenpertahun' + i).val('');
                    $('#operasionaltanam' + i).val('');
                }
                $('#suplierbibit').val('');
                $('#iddesasuplierbibit').val('');
                $("#suplierbibit").prop("disabled", true);
                $("#iddesasuplierbibit").prop("disabled", true);
                $('#kebutuhanpupukorganik').val('');
                $('#jenispupukorganik').val('');
                $('#kebutuhanpupukanorganik').val('');
                $('#jenispupukanorganik').val('');
                $('#pupukbuatan').val('');
                $("#pupukbuatan").prop("disabled", true);
                $('#namakios').val('');
                $('#iddesakios').val('');
                $("#namakios").prop("disabled", true);
                $("#iddesakios").prop("disabled", true);
                $('#hargaijon').val('');
                $('#luasanijon').val('');
                $('#satuanijon').val('');
                $("#hargaijon").prop("disabled", true);
                $("#luasanijon").prop("disabled", true);
                $("#satuanijon").prop("disabled", true);
                $('#kapasitaslimbahtani').val('');
                $('#limbahtanijualtanpaolah').val('');
                $('#limbaholahtani').val('');
                $('#limbahtanijualolah').val('');
                $("#kapasitaslimbahtani").prop("disabled", true);
                $("#limbahtanijualtanpaolah").prop("disabled", true);
                $("#limbahtanijualolah").prop("disabled", true)
                $("#limbaholahtani").prop("disabled", true)

                var n = 1;
                var totalsaprodi = {{$jenissaprodi->count('id')}};
                for (n = 1; n <= totalsaprodi; n++) {
                    $('#idjenisaprodi' + n).prop('checked', false);
                }

            }
        }

        function checkjenispertanian() {
            var i = 1;
            var totaltanaman = {{$jenistanaman->count('id')}};
            for (i = 1; i <= totaltanaman + 1; i++) {
                var id = 'idjenistanaman' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 1; a <= 10; a++) {
                        $('#kolom' + a + 'tani' + i).show();
                    }
                    $("#jenistanaman" + i).prop("disabled", false);
                } else {
                    for (a = 1; a <= 10; a++) {
                        $('#kolom' + a + 'tani' + i).hide();
                        $('#jenistanaman' + i).val('');
                        $('#luastanam' + i).val('');
                        $('#satuanluas' + i).val('');
                        $('#bulantanam' + i).val('');
                        $('#bulantanamselanjutnya' + i).val('');
                        $('#kebutuhanbibit' + i).val('');
                        $('#satuanbibit' + i).val('');
                        $('#hargabibit' + i).val('');
                        $('#kapasitaspanen' + i).val('');
                        $('#panenpertahun' + i).val('');
                        $('#operasionaltanam' + i).val('');
                    }
                    $("#jenistanaman" + i).prop("disabled", true);
                }
            }
        }
        function checktanamantumpang() {
            var i = 1;
            var totaltanaman = {{$tanamantumpangsari->count('id')}};
            for (i = 1; i <= totaltanaman + 1; i++) {
                var id = 'idtanamantumpang' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 1; a <= 3; a++) {
                        $('#kolom' + a + 'tanitumpang' + i).show();
                    }
                    $("#jenistanamantumpang" + i).prop("disabled", false);
                } else {
                    for (a = 1; a <= 3; a++) {
                        $('#kolom' + a + 'tanitumpang' + i).hide();
                        $('#tanamaninti' + i).val('');
                        $('#kapasitaspanentumpang' + i).val('');
                        $('#panenpertanamtumpang' + i).val('');
                    }
                    $("#jenistanamantumpang" + i).prop("disabled", true);
                }
            }
        }

        function tumpangsari(sari) {
            if (sari == 1) {
                $("#divtumpangsari").show();
            } else {
                $("#divtumpangsari").hide();
                for (i = 1; i <= 11; i++) {
                    $('#idtanamantumpang' + i).prop('checked', false);
                for (a = 1; a <= 3; a++) {
                        $('#kolom' + a + 'tanitumpang' + i).hide();
                        $('#tanamaninti' + i).val('');
                        $('#kapasitaspanentumpang' + i).val('');
                        $('#panenpertanamtumpang' + i).val('');
                        $("#jenistanamantumpang" + i).val('');
                        $("#jenistanamantumpang" + i).prop("disabled", true);
                    }
                }
            }
        }
        function nonproduktif(non) {
            if (non == 1) {
                $("#divnonpro").show();
                $("#luaslahannonproduktif").prop("disabled", false);
                var input = document.getElementById ("luaslahannonproduktif");
                    input.focus ();
            } else {
                $("#divnonpro").hide();
                $('#luaslahannonproduktif').val('');
            }
        }
        function checkbibit(bibit) {
            if (bibit == 1) {
                $("#suplierbibit").prop("disabled", true);
                $("#iddesasuplierbibit").prop("disabled", true);
                $('#suplierbibit').val('');
                $('#iddesasuplierbibit').val('');
            } else {
                $("#suplierbibit").prop("disabled", false);
                $("#iddesasuplierbibit").prop("disabled", false);
            }
        }

        function checkpupuk(pupuk) {
            if (pupuk == 1) {
                $("#pupukbuatan").prop("disabled", true);
                $("#namakios").prop("disabled", false);
                $("#iddesakios").prop("disabled", false);
                $('#pupukbuatan').val('');
            } else {
                $("#pupukbuatan").prop("disabled", false);
                $("#namakios").prop("disabled", true);
                $("#iddesakios").prop("disabled", true);
                $('#namakios').val('');
                $('#iddesakios').val('');
            }
        }

        function checkmodelpenjualan(penjualan) {
            if (penjualan == 1) {
                $("#hargaijon").prop("disabled", false);
                $("#luasanijon").prop("disabled", false);
                $("#satuanijon").prop("disabled", false);
                document.getElementById('hargaijon').required = true;
                document.getElementById('luasanijon').required = true;
                document.getElementById('satuanijon').required = true;
            } else {
                $("#hargaijon").prop("disabled", true);
                $("#luasanijon").prop("disabled", true);
                $("#satuanijon").prop("disabled", true);
                $('#hargaijon').val('');
                $('#luasanijon').val('');
                $('#satuanijon').val('');
            }
        }

        function checklimbah(penjualan) {
            if (penjualan == 3) {
                $("#kapasitaslimbahtani").prop("disabled", false);
                $("#limbahtanijualtanpaolah").prop("disabled", false);
                $("#limbahtanijualolah").prop("disabled", false);
                $("#limbaholahtani").prop("disabled", true);
                $('#limbaholahtani').val('');
            }
            if (penjualan == 2) {
                $("#limbaholahtani").prop("disabled", false);
                $("#kapasitaslimbahtani").prop("disabled", true);
                $("#limbahtanijualtanpaolah").prop("disabled", true);
                $("#limbahtanijualolah").prop("disabled", true);
                $('#kapasitaslimbahtani').val('');
                $('#limbahtanijualtanpaolah').val('');
                $('#limbahtanijualolah').val('');
            }
            if (penjualan == 1) {
                $("#limbaholahtani").prop("disabled", true);
                $("#kapasitaslimbahtani").prop("disabled", true);
                $("#limbahtanijualtanpaolah").prop("disabled", true);
                $("#limbahtanijualolah").prop("disabled", true);
                $('#kapasitaslimbahtani').val('');
                $('#limbahtanijualtanpaolah').val('');
                $('#limbaholahtani').val('');
                $('#limbahtanijualolah').val('');
            }
        }

// BIDANG PETERNAKAN
        function checkpeternakan(value) {
            if (value == 1) {
                $('#divpeternakan').show();
                $('.saveternak').show();
            } else {
                $('#divpeternakan').hide();
                $('.saveternak').hide();
            }
        }

        function checkolahternak(value) {
            if (value == 1 || value == 3) {
                $("#kepemilikankandang1").prop("disabled", true);
                $("#kepemilikankandang1").prop("checked", false);
                $("#kepemilikankandang2").prop("disabled", true);
                $("#kepemilikankandang2").prop("checked", false);
                $("#kepemilikankandang3").prop("disabled", true);
                $("#kepemilikankandang3").prop("checked", false);
            } else if (value == 2) {
                $("#kepemilikankandang1").prop("disabled", false);
                $("#kepemilikankandang2").prop("disabled", false);
                $("#kepemilikankandang3").prop("disabled", false);
                document.getElementById('kepemilikankandang1').required = true;
                document.getElementById('kepemilikankandang2').required = true;
                document.getElementById('kepemilikankandang3').required = true;
            }
        }

        function checkperolehanpakanternak(value) {
            if (value == 4) {
                $("#namasuplier").prop("disabled", false);
                $("#iddesasuplier").prop("disabled", false);
                document.getElementById('namasuplier').required = true;
                document.getElementById('iddesasuplier').required = true;
                var inpuet = document.getElementById ('namasuplier');
                    inpuet.focus ();
            } else {
                $("#namasuplier").prop("disabled", true);
                $("#namasuplier").val('');
                $("#iddesasuplier").prop("disabled", true);
                $("#iddesasuplier").val('');
            }
        }

        function checklimbahhasilternak(value) {
            if (value == 2) {
                var totallimbahternak = {{$limbahternak->count('id')}};
                for (i = 1; i <= totallimbahternak + 1; i++) {
                    $("#idlimbahternak" + i).prop("disabled", false);
                }
                $("#kapasitaslimbahperbulan").prop("disabled", true);
                $("#kapasitaslimbahperbulan").val('');
                $("#hargasebelumolah").prop("disabled", true);
                $("#hargasebelumolah").val('');
                $("#hargasetelaholah").prop("disabled", true);
                $("#hargasetelaholah").val('');
            } else if (value == 3) {
                $("#kapasitaslimbahperbulan").prop("disabled", false);
                $("#hargasebelumolah").prop("disabled", false);
                $("#hargasetelaholah").prop("disabled", false);
                document.getElementById('kapasitaslimbahperbulan').required = true;
                document.getElementById('hargasebelumolah').required = true;
                document.getElementById('hargasetelaholah').required = true;
                var inpot = document.getElementById ('kapasitaslimbahperbulan');
                    inpot.focus ();
                var totallimbahternak = {{$limbahternak->count('id')}};
                for (i = 1; i <= totallimbahternak + 1; i++) {
                    $("#idlimbahternak" + i).prop("disabled", true);
                }
            } else {
                $("#kapasitaslimbahperbulan").prop("disabled", true);
                $("#kapasitaslimbahperbulan").val('');
                $("#hargasebelumolah").prop("disabled", true);
                $("#hargasebelumolah").val('');
                $("#hargasetelaholah").prop("disabled", true);
                $("#hargasetelaholah").val('');
                var totallimbahternak = {{$limbahternak->count('id')}};
                for (i = 1; i <= totallimbahternak + 1; i++) {
                    $("#idlimbahternak" + i).prop("disabled", true);
                }
            }
        }

        function checkjenisternak() {
            var i = 1;
            var totalternak = {{$jenisternak->count('id')}};
            for (i = 1; i <= totalternak + 1; i++) {
                var id = 'idjenisternak' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 3; a <= 12; a++) {
                        $('#col' + a + i).show();
                    }
                    $("#jenisternak" + i).prop("disabled", false);
                } else {
                    for (a = 2; a <= 12; a++) {
                        $('#col' + a + i).hide();
                        $('#namaproduk' + i).val('');
                    }
                    $("#jenisternak" + i).prop("disabled", true);
                }
            }

        }

        function penyakit(sakit) {
            if (sakit == 1) {
                $("#divsakit").show();
                document.getElementById('idpenyakitternak').required = true;
            } else {
                $("#divsakit").hide();
                $("#idpenyakitternak").prop("disabled", false);
                $('#idpenyakitternak').val('');
            }
        }

        function checklimbahternak() {
            var i = 1;
            var totallimbah = {{$limbahternak->count('id')}};
            for (i = 1; i <= totallimbah + 1; i++) {
                var id = 'idlimbahternak' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divkapasitasperbulan' + i).show();
                    $('#divhargajual' + i).show();
                    $("#jenislimbahternak" + i).prop("disabled", false);
                    // document.getElementById('kapasitasperbulanlimbahternak' + i).required = true;
                    // var inpot = document.getElementById ('kapasitasperbulanlimbahternak' + i);
                    // inpot.focus ();
                    // document.getElementById('satuanlimbahlimbahternak' + i).required = true;
                    // document.getElementById('hargajuallimbahternak' + i).required = true;
                
                } else {
                    $('#divkapasitasperbulan' + i).hide();
                    $('#divhargajual' + i).hide();
                    $("#jenislimbahternak" + i).prop("disabled", true);
                    // document.getElementById('kapasitasperbulanlimbahternak' + i).required = false;
                    // document.getElementById('satuanlimbahlimbahternak' + i).required = false;
                    // document.getElementById('hargajuallimbahternak' + i).required = false;
                   
                }
            }
        }

        function checkpakanternak() {
            var i = 1;
            var totalpakanternak = {{$jenispakanternak->count('id')}};
            var lain = totalpakanternak + 1;
            for (i = 1; i <= totalpakanternak + 1; i++) {
                var id = 'idjenispakanternak' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divkebutuhanpakan' + i).show();
                    $('#divhargabeli' + i).show();
                    $("#namapakanternak" + lain).prop("disabled", false);
                    document.getElementById('kebutuhanperhari' + i).required = true;
                    var inpoet = document.getElementById ('kebutuhanperhari' + i);
                    inpoet.focus ();
                    document.getElementById('satuanpakan' + i).required = true;
                    document.getElementById('hargapakan' + i).required = true;
                    document.getElementById('namapakanternak' + lain).required = true;
                } else {
                    $('#divkebutuhanpakan' + i).hide();
                    $('#divhargabeli' + i).hide();
                    $("#namapakanternak" + lain).prop("disabled", true);
                    document.getElementById('kebutuhanperhari' + i).required = false;
                    document.getElementById('satuanpakan' + i).required = false;
                    document.getElementById('hargapakan' + i).required = false;
                    document.getElementById('namapakanternak' + lain).required = false;
                    
                }
            }
        }

        $("#statusterserangpenyakit").change(function () {
            var jenis = $("#statusterserangpenyakit").val();
            if (jenis == 1) {
                $("#idpenyakitternak").prop("disabled", true);
                $("#idpenyakitternak").val('');
            } else {
                $("#idpenyakitternak").prop("disabled", false);
            }
        });
// BIDANG PERIKANAN
        function checkperikanan(Perikanan) {
            if (Perikanan == 1) {
                for (a = 1; a <= 8; a++) {
                    $('#divikan' + a).show();
                }
                $('#simpanperikanan').show();
            } else {
                for (a = 1; a <= 8; a++) {
                    $('#divikan' + a).hide();
                }
                $('#simpanperikanan').hide();
                $('#perolehanpakan1').prop('checked', false);
                $('#perolehanpakan2').prop('checked', false);
                $('#olahanlanjutan1').prop('checked', false);
                $('#olahanlanjutan2').prop('checked', false);
                $('#pemasaranolahanikan1').prop('checked', false);
                $('#pemasaranolahanikan2').prop('checked', false);
                $('#pemasaranolahanikan3').prop('checked', false);
                $('#pemasaranolahanikan4').prop('checked', false);
                var i = 1;
                var totalbudidaya = {{$jenisikanbudidaya->count('id')}};
                for (i = 1; i <= totalbudidaya + 1; i++) {
                    for (a = 1; a <= 15; a++) {
                        $('#kolom' + a + 'ikan' + i).hide();
                    }
                    $('#idikanbudidaya' + i).prop('checked', false);
                    $('#jenisikanbudidaya' + i).val('');
                    $('#luaskolam' + i).val('');
                    $('#satuanluaskolam' + i).val('');
                    $('#hargabibitikan' + i).val('');
                    $('#satuanbibitikan' + i).val('');
                    $('#hargajualikan' + i).val('');
                    $('#satuanjualikan' + i).val('');
                    $('#tanggaltebarikan' + i).val('');
                    $('#tanggalpanenikan' + i).val('');
                    $('#kapasitasperpanenikan' + i).val('');
                    $('#panenpertahunikan' + i).val('');
                    $('#biayaproduksiikan' + i).val('');
                    $('#idjenispakanikan' + i).val('');
                    $('#kebutuhanpakanperhariikan' + i).val('');
                    $('#satuanpakanikan' + i).val('');
                    $('#hargapakanikan' + i).val('');
                    $("#jenisikanbudidaya" + i).prop("disabled", true);
                }
                var t = 1;
                var totaltangkap = {{$jenisikantangkap->count('id')}};
                for (t = 1; t <= totaltangkap + 1; t++) {
                    $('#kolom1tangkap' + t).hide();
                    $('#kolom2tangkap' + t).hide();
                    $('#kapasitasperhari' + t).val('');
                    $('#idikantangkap' + t).prop('checked', false);
                    $('#pemasarantangkap1' + t).prop('checked', false);
                    $('#pemasarantangkap2' + t).prop('checked', false);
                    $('#pemasarantangkap3' + t).prop('checked', false);
                    $('#pemasarantangkap4' + t).prop('checked', false);
                    $("#jenisikantangkap" + t).prop("disabled", true);
                    $('#jenisikantangkap' + t).val('');
                }
                $("#idsuplier").prop("disabled", true);
                $("#namasuplier").prop("disabled", true);
                $('#idsuplier').val('');
                $('#namasuplier').val('');
                $("#namaolahan").prop("disabled", true);
                $("#produksiperbulan").prop("disabled", true);
                $("#satuanproduksi").prop("disabled", true);
                $("#hargajual").prop("disabled", true);
                $("#satuanjual").prop("disabled", true);
                $('#namaolahan').val('');
                $('#produksiperbulan').val('');
                $('#satuanproduksi').val('');
                $('#hargajual').val('');
                $('#satuanjual').val('');

            }
        }

        function checkjenisikanbudidaya() {
            var i = 1;
            var totalbudidaya = {{$jenisikanbudidaya->count('id')}};
            for (i = 1; i <= totalbudidaya + 1; i++) {
                var id = 'idikanbudidaya' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 1; a <= 15; a++) {
                        $('#kolom' + a + 'ikan' + i).show();
                    }
                    $("#jenisikanbudidaya" + i).prop("disabled", false);
                } else {
                    for (a = 1; a <= 15; a++) {
                        $('#kolom' + a + 'ikan' + i).hide();
                        $('#jenisikanbudidaya' + i).val('');
                        $('#luaskolam' + i).val('');
                        $('#satuanluaskolam' + i).val('');
                        $('#hargabibitikan' + i).val('');
                        $('#satuanbibitikan' + i).val('');
                        $('#hargajualikan' + i).val('');
                        $('#satuanjualikan' + i).val('');
                        $('#tanggaltebarikan' + i).val('');
                        $('#tanggalpanenikan' + i).val('');
                        $('#kapasitasperpanenikan' + i).val('');
                        $('#panenpertahunikan' + i).val('');
                        $('#biayaproduksiikan' + i).val('');
                        $('#idjenispakanikan' + i).val('');
                        $('#kebutuhanpakanperhariikan' + i).val('');
                        $('#satuanpakanikan' + i).val('');
                        $('#hargapakanikan' + i).val('');

                    }
                    $("#jenisikanbudidaya" + i).prop("disabled", true);
                }
            }
        }

        function checkjenisikantangkap() {
            var i = 1;
            var totaltangkap = {{$jenisikantangkap->count('id')}};
            for (i = 1; i <= totaltangkap + 1; i++) {
                var id = 'idikantangkap' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#kolom1tangkap' + i).show();
                    $('#kolom2tangkap' + i).show();
                    $("#jenisikantangkap" + i).prop("disabled", false);
                } else {
                    $('#kolom1tangkap' + i).hide();
                    $('#kolom2tangkap' + i).hide();
                    $('#kapasitasperhari' + i).val('');
                    $('#pemasarantangkap1' + i).prop('checked', false);
                    $('#pemasarantangkap2' + i).prop('checked', false);
                    $('#pemasarantangkap3' + i).prop('checked', false);
                    $('#pemasarantangkap4' + i).prop('checked', false);
                    $("#jenisikantangkap" + i).prop("disabled", true);
                }
            }
        }

        function checkpakanikan(pakanikan) {
            if (pakanikan == 1) {
                $("#idsuplierikan").prop("disabled", true);
                $("#namasuplierikan").prop("disabled", true);
                $('#idsuplierikan').val('');
                $('#namasuplierikan').val('');
            } else {
                $("#idsuplierikan").prop("disabled", false);
                $("#namasuplierikan").prop("disabled", false);
            }
        }

        function checkolahanikan(olah) {
            if (olah == 1) {
                $("#namaolahan").prop("disabled", false);
                $("#produksiperbulan").prop("disabled", false);
                $("#satuanproduksi").prop("disabled", false);
                $("#hargajual").prop("disabled", false);
                $("#satuanjual").prop("disabled", false);
            } else {
                $("#namaolahan").prop("disabled", true);
                $("#produksiperbulan").prop("disabled", true);
                $("#satuanproduksi").prop("disabled", true);
                $("#hargajual").prop("disabled", true);
                $("#satuanjual").prop("disabled", true);
                $('#namaolahan').val('');
                $('#produksiperbulan').val('');
                $('#satuanproduksi').val('');
                $('#hargajual').val('');
                $('#satuanjual').val('');

            }
        }

// BIDANG JASA
        function checkjasa(jasa) {
            if (jasa == 1) {
                $('#divjasa').show();
                $('#simpanjasa').show();
            } else {
                $('#divjasa').hide();
                $('#simpanjasa').hide();
            }
        }



    </script>
@endpush
