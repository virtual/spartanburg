@extends('_layouts.master')

@section('pagetitle')
Interior with Snippets
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection


@section('content')
 
@include('_partials/rotator-inpage', [
'style' => ''
])

<h2>Take a tour of any SCC campus!</h2>
<p>Thank you for your interest in Spartanburg Community College and for wanting to take a tour of our campus! Fill out the request form below and we will work with you to arrange a tour (no walk-ins, please)</p>

@include ('_partials/form-contact')
 
@endsection

@section('left-nav')
@include ('_partials/left-nav')
@endsection

@section('sidebar')

@include ('_partials/sidebar-contact')
@endsection