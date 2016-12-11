@extends('layouts.master')
Nama : {{$nama}}<br/>

@section('content')
Alamat : {{$alamat}}<br/>
Profesi : {{$profesi}}<br/>
Istri : {{isset($istri) ? $istri : "Masih Single"}}<br/>


@for($i = 0;$i<=10;$i++)
  {{$i}}<br>
@endfor

@if(@istri)
  Jokowi sudah beristri
@endif

istri : {{@istri}}<br/>

@stop
