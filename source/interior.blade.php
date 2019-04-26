@extends('_layouts.master')

@section('pagetitle')
Interior
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo expedita alias corrupti molestiae enim aspernatur consequatur illum est a beatae nemo eum voluptates vitae corporis ab ipsam incidunt dolorum.</p>

@include('_partials/dropzones')

@endsection
  
@section('left-nav')
@include ('_partials/left-nav')
@endsection


@section('alert')
true
@endsection
 