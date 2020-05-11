@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
@endpush
@section('title')
    HASIL KUESIONER
@endsection
@section('header')
    TABEL HASIL KUESIONER
@endsection
@section('bar')
    <li class="breadcrumb-item"><a href="{{route('hasilkuesioner.index')}}">HASIL KUESIONER</a></li>
    <li class="breadcrumb-item active">TABEL HASIL KUESIONER</li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Hasil Kuesioner</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="mainTable" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th>ID</th>
                                        <th>NIK</th>
                                        <th>Kuesioner Dasar</th>
                                        <th>Bidang Industri</th>
                                        <th>Bidang Perdagangan</th>
                                        <th>Bidang Pertanian</th>
                                        <th>Bidang Peternakan</th>
                                        <th>Bidang Perikanan</th>
                                        <th>Bidang Jasa</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->


            </div>
        </div>
        <!-- /.col -->
    </div>
@endsection
@push('script')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            var dt = $('#mainTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('kuesioner.data')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nik', name: 'nik'},
                    {
                        data: 'kuesionerdasar',
                        name: 'kuesionerdasar',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {
                        data: 'bidangindustri',
                        name: 'bidangindustri',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {
                        data: 'bidangperdagangan',
                        name: 'bidangperdagangan',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {
                        data: 'bidangpertanian',
                        name: 'bidangpertanian',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {
                        data: 'bidangpeternakan',
                        name: 'bidangpeternakan',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {
                        data: 'bidangperikanan',
                        name: 'bidangperikanan',
                        orderable: false,
                        searchable: false,
                        align: 'center'
                    },
                    {data: 'bidangjasa', name: 'bidangjasa', orderable: false, searchable: false, align: 'center'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ]
            });
            var del = function (id) {
                swal({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan data yang sudah terhapus!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya!",
                    cancelButtonText: "Tidak!",
                }).then(
                    function (result) {
                        $.ajax({
                            url: "{{route('kuesioner.index')}}/" + id,
                            method: "DELETE",
                        }).done(function (msg) {
                            dt.ajax.reload();
                            swal("Deleted!", "Data sudah terhapus.", "success");
                        }).fail(function (textStatus) {
                            alert("Request failed: " + textStatus);
                        });
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                        swal("Cancelled", "Data batal dihapus", "error");
                    });
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });
        });
    </script>
@endpush
