@extends('layouts.master')
@push('css')
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush
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
                <div class="card-body">
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
                    {!! Form::open(['url'=>route('simpanbidangperdagangan')]) !!}
                    @include('kuesioners._form_perdagangan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpandagang'] )  }}
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
                    {!! Form::open(['url'=>route('simpanbidangpertanian')]) !!}
                    @include('kuesioners._form_pertanian')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanpertanian'] )  }}
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
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary saveternak'] )  }}
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
                    {!! Form::open(['url'=>route('simpanbidangperikanan')]) !!}
                    @include('kuesioners._form_perikanan')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanperikanan'] )  }}
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
                    {!! Form::open(['url'=>route('simpanbidangjasa')]) !!}
                    @include('kuesioners._form_jasa')
                    {{ Form::button('<i class="fa fa-save"> SIMPAN</i>', ['type' => 'submit', 'class' => 'btn btn-primary','id'=>'simpanjasa'] )  }}
                    {!! Form::close() !!}
                </div>
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
            var totalindustri = {{$jenisindustri->count('id')}};
            for (i = 1; i <= totalindustri + 1; i++) {
                var id = 'idjenisindustri' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    for (a = 1; a <= 13; a++) {
                        $('#kolom' + a + 'industri' + i).show();
                    }
                    $("#jenisindustri" + i).prop("disabled", false);
                } else {
                    for (a = 1; a <= 13; a++) {
                        $('#kolom' + a + 'industri' + i).hide();
                        $('#jenisindustri' + i).val('');
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
                    for (a = 1; a <= 13; a++) {
                        $('#kolom' + a + 'industri' + i).hide();
                        $('#jenisindustri' + i).val('');
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
                        $('#jumlahkulakperbulan' + x + 'bar' + i).val('');
                        $('#satuankulak' + x + 'bar' + i).val('');
                        $('#hargakulak' + x + 'bar' + i).val('');
                        $('#hargajual' + x + 'bar' + i).val('');
                        $('#satuanjual' + x + 'bar' + i).val('');
                        $('#idsuplier' + x + 'bar' + i).val('');
                        $('#namasuplier' + x + 'bar' + i).val('');
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
                $('#divjenisdagang').show();
                $('#simpandagang').show();
            } else {
                $('#divjenisdagang').hide();
                $('#simpandagang').hide();
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
                        $('#jumlahkulakperbulan' + x + 'bar' + i).val('');
                        $('#satuankulak' + x + 'bar' + i).val('');
                        $('#hargakulak' + x + 'bar' + i).val('');
                        $('#hargajual' + x + 'bar' + i).val('');
                        $('#satuanjual' + x + 'bar' + i).val('');
                        $('#idsuplier' + x + 'bar' + i).val('');
                        $('#namasuplier' + x + 'bar' + i).val('');
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
                for (a = 14; a <= 29; a++) {
                    $('#divpertanian' + a).show();
                }
                $('#simpanpertanian').show();
            } else {
                for (a = 14; a <= 29; a++) {
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

        //BIDANG PERIKANAN
        function checkperikanan(Perikanan) {
            if (Perikanan == 1) {
                for (a = 1; a <= 7; a++) {
                    $('#divikan' + a).show();
                }
                $('#simpanperikanan').show();
            } else {
                for (a = 1; a <= 7; a++) {
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
                    $("#jenisikanbudidaya" + i).prop("disabled", true);
                }
            }
        }

        function checkpakanikan(pakanikan) {
            if (pakanikan == 1) {
                $("#idsuplier").prop("disabled", true);
                $("#namasuplier").prop("disabled", true);
                $('#idsuplier').val('');
                $('#namasuplier').val('');
            } else {
                $("#idsuplier").prop("disabled", false);
                $("#namasuplier").prop("disabled", false);
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
            } else if(value == 2){
                $("#kepemilikankandang1").prop("disabled", false);
                $("#kepemilikankandang2").prop("disabled", false);
                $("#kepemilikankandang3").prop("disabled", false);
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
                } else {
                    $('#divkapasitasperbulan' + i).hide();
                    $('#divhargajual' + i).hide();
                    $("#jenislimbahternak" + i).prop("disabled", true);
                }
            }
        }

        function checkpakanternak() {
            var i = 1;
            var totalpakanternak = {{$jenispakanternak->count('id')}};
            for (i = 1; i <= totalpakanternak + 1; i++) {
                var id = 'idjenispakanternak' + i;
                var check = document.getElementById(id)
                if (check.checked === true) {
                    $('#divkebutuhanpakan' + i).show();
                    $('#divhargabeli' + i).show();
                    $("#namapakanternak" + i).prop("disabled", false);
                } else {
                    $('#divkebutuhanpakan' + i).hide();
                    $('#divhargabeli' + i).hide();
                    $("#namapakanternak" + i).prop("disabled", true);
                }
            }
        }

    </script>
@endpush
