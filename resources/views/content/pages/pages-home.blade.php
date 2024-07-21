@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<h4>Home Page</h4>
<p>Este recurso es publico</p>
@role('Admin')
<p>Este recurso es del admin</p>
@endrole
@role('Escritor')
<p>Este recurso es del escritor</p>
@endrole
@endsection
