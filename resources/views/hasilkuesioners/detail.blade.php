@extends('layouts.master')
@section('content')
    @if(empty($bidangpeternakan))
        <p>Data tidak ditemukan</p>
    @else
    {{$bidangpeternakan->statuspengelolaan}}
    @endif
@endsection
