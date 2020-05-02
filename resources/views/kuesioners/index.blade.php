@extends('layouts.master')

@section('content')
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
                        <label for="inputEstimatedBudget">Nama</label>
                        <input type="number" id="inputEstimatedBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputSpentBudget">Alamat</label>
                        <input type="number" id="inputSpentBudget" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEstimatedDuration">Desa - Kecamatan</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Kuesioner Dasar</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body" style="display: none">
                    {!! Form::open(['url'=>route('simpankuesionerdasar')]) !!}
                    @include('kuesioners._form')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Industri</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangindustri')]) !!}
                    @include('kuesioners._form_industri')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanindustri'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Perdagangan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    @include('kuesioners._form_perdagangan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Pertanian/Perkebunan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    @include('kuesioners._form_pertanian')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Peternakan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('simpanbidangpeternakan')]) !!}
                    @include('kuesioners._form_peternakan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Perikanan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    @include('kuesioners._form_perikanan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bidang Jasa</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    @include('kuesioners._form_jasa')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary'] )  }}
                    {!! Form::close() !!}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
@push('script')
    <script>

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
                } else {
                    $('#divaset' + i).hide();
                    $('#jumlahaset' + i).val('');
                }
            }
        }

        function checksda(hasil) {
            if (hasil == 1) {
                $('#divsda').show();
            } else {
                $('#divsda').hide();
                $('#namasumberdaya').val('');
                $('#panenpertahun').val('');
                $('#hasilperpanen').val('');
            }

        }

        function checkbank(bank) {
            if (bank == 1) {
                $('#divbank').show();
                $('#divkredit').show();
            } else {
                $('#divbank').hide();
                $('#divkredit').hide();
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
            var total = {{$perbankan->count('id')}};
            for (i = 1; i <= total; i++) {
                var id = 'idjenisperbankan' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divnamabank' + i).show();
                    $('#divalamatbank' + i).show();
                } else {
                    $('#divnamabank' + i).hide();
                    $('#divalamatbank' + i).hide();
                    $('#namabank' + i).val('');
                    $('#cabang' + i).val('');
                }
            }
        }

        // BIDANG INDUSTRI
        function checkjenisindustri() {
            var i = 1;
            var totalindustri = {{$jenisindustri->count('id')}}; // jenis industri tidak boleh lebih dari 20. jika lebih ubah nama kolom2 pada perulangan
            for (i = 1; i <= totalindustri + 1; i++) {
                var id = 'idjenisindustri' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 2; a <= 14; a++) { //a dimulai dari 2 karena jika dimulai dari 1 akan ada "kolom111" berjumlah 2 yaitu kolom1 ke 11 dan kolom11 ke 1
                        $('#kolom' + a + i).show();  //a dimulai dari 2 maka max perulangan jumlah Md(master data) = 20 agar tidak ada kolom2 ke11 dan kolom21 ke 1
                    }
                    $("#jenisindustri" + i).prop("disabled", false);
                } else {
                    for (a = 2; a <= 14; a++) {
                        $('#kolom' + a + i).hide();
                        $('#namaproduk' + i).val('');
                        $('#produksiperbulan' + i).val('');
                        $('#satuanproduksi' + i).val('');
                        $('#idbahanbaku' + i).val('');
                        $('#kebutuhanperbulan' + i).val('');
                        $('#satuanbahanbaku' + i).val('');
                        $('#hargakulakbahan' + i).val('');
                        $('#satuankulak' + i).val('');
                        $('#idsuplier' + i).val('');
                        $('#namasuplier' + i).val('');
                        $('#hargajualproduk' + i).val('');
                        $('#satuanjual' + i).val('');
                        $('#operasionalperbulan' + i).val('');
                        $('#pemasarandalamkabupaten' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi' + i).prop('checked', false);
                        $('#pemasaranluarnegeri' + i).prop('checked', false);
                        $('#idjenisindustriu' + i).val('');
                    }
                    $("#jenisindustri" + i).prop("disabled", true);
                }
            }
        }

        function checkindustri(industri) {
            if (industri == 1) {
                $('#divjenisindustri').show();
                $('#simpanindustri').show();
            } else {
                $('#divjenisindustri').hide();
                $('#simpanindustri').hide();
                var i = 1;
                var totalindustri = {{$jenisindustri->count('id')}};
                for (i = 1; i <= totalindustri + 1; i++) {
                    $('#idjenisindustri' + i).prop('checked', false);
                    for (a = 2; a <= 14; a++) {
                        $('#kolom' + a + i).hide();
                        $('#namaproduk' + i).val('');
                        $('#produksiperbulan' + i).val('');
                        $('#satuanproduksi' + i).val('');
                        $('#idbahanbaku' + i).val('');
                        $('#kebutuhanperbulan' + i).val('');
                        $('#satuanbahanbaku' + i).val('');
                        $('#hargakulakbahan' + i).val('');
                        $('#satuankulak' + i).val('');
                        $('#idsuplier' + i).val('');
                        $('#namasuplier' + i).val('');
                        $('#hargajualproduk' + i).val('');
                        $('#satuanjual' + i).val('');
                        $('#operasionalperbulan' + i).val('');
                        $('#pemasarandalamkabupaten' + i).prop('checked', false);
                        $('#pemasaranluarkabupaten' + i).prop('checked', false);
                        $('#pemasaranluarprovinsi' + i).prop('checked', false);
                        $('#pemasaranluarnegeri' + i).prop('checked', false);
                    }
                }
            }

        }

        // BIDANG PETERNAKAN
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

        function checklimbahternak() {
            var i = 1;
            var totallimbah = {{$limbahternak->count('id')}};
            for (i = 1; i <= totallimbah + 1; i++) {
                var id = 'idlimbahternak' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divkapasitasperbulan'+i).show();
                    $('#divhargajual'+i).show();
                    $("#jenislimbahternak" + i).prop("disabled", false);
                } else {
                    $("#jenislimbahternak" + i).prop("disabled", true);
                }
            }
        }
    </script>
@endpush
