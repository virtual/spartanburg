@extends('_layouts.master')

@section('pagetitle')
Interior with Snippets
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 

<!-- ! Banner - InPage; need a live ref example -->
<!-- @include('_partials/banner-inpage') -->

@include('_partials.accordion', [
'style' => '',
'SectionTitle' => 'Steps Accordion - Default'
])

@include('_partials.accordion', [
'style' => '2',
'SectionTitle' => 'Steps Accordion - Style 2'
])

@include('_partials.accordion', [
'style' => '3',
'SectionTitle' => 'Steps Accordion - Style 3'
])

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo expedita alias corrupti molestiae enim aspernatur consequatur illum est a beatae nemo eum voluptates vitae corporis ab ipsam incidunt dolorum.</p>

<h2>Link Set Snippet</h2>
@include('_partials/linkset')

@include('_partials/dropzones')

@endsection
  
@section('left-nav')
@include ('_partials/left-nav')
@endsection  

@section('sidebar')
@include ('_partials/sidebar-contact')
@endsection


@section('alert')
true
@endsection
 