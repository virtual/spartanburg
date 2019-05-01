@extends('_layouts.major')

@section('pagetitle')
Major
@endsection

@section('breadcrumb')
<!-- "Please do use the breadcrumbs [on Majors] – they went rogue on us before" - Jane -->
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo expedita alias corrupti molestiae enim aspernatur consequatur illum est a beatae nemo eum voluptates vitae corporis ab ipsam incidunt dolorum.</p>

@include('_partials/dropzones')

@endsection
   

@section('sidebar')
@include ('_partials/sidebar-contact')
@endsection
