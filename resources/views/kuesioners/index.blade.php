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
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
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
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    {{--                    @include('kuesioners._form_industri')--}}
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
                    <h3 class="card-title">Bidang Perdagangan</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    {{--                    @include('kuesioners._form_perdagangan')--}}
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
                    {{--                    @include('kuesioners._form_pertanian')--}}
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
                    {!! Form::open(['url'=>route('kuesioner.store')]) !!}
                    {{--                    @include('kuesioners._form_peternakan')--}}
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
                    {{--                    @include('kuesioners._form_perikanan')--}}
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
                    {{--                    @include('kuesioners._form_jasa')--}}
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
        function check() {
            var total = {{$bidangusahapekerjaan->count('id')}};
                @foreach($bidangusahapekerjaan as $idbidang)
            var id = 'bu{{$idbidang->id}}';
            var check = document.getElementById(id)
            if (check.checked === true) {
                $('#div{{$idbidang->id}}').show();
            } else {
                $('#div{{$idbidang->id}}').hide();
                $('#idstatuspekerjaan{{$idbidang->id}}').val('');
            }
            @endforeach
        }
    </script>
@endpush
