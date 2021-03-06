@extends('_layouts.course')

@section('pagetitle')
ENG-101 - English Composition I
@endsection

@section('left-nav-off')
@include ('_partials/left-nav')
@endsection  
 
@section('content') 
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo expedita alias corrupti molestiae enim aspernatur consequatur illum est a beatae nemo eum voluptates vitae corporis ab ipsam incidunt dolorum.</p>
@endsection

@section('classinfo')
<table class="table classinfo">
<thead><th>Dates</th><th>Times</th><th>Location</th></thead>
<tbody>
  <tr><td>Jul 29 - Aug 1</td><td>Mon-Thur, 8:30am-5:30pm</td><td>Central Campus</td></tr>
  <tr><td>Sept 3 - Sept 6</td><td>Mon-Thur, 8:30am-5:30pm</td><td>Central Campus</td></tr>
</tbody>
</table> 
@endsection

@section('reginfo')
<p>ALLOW FOR ASSET: Please
  make a note of the class date you wish to register for. You will need 
it to complete the Real Estate Policies &amp; Procedures form. After you
  submit the form you will receive an email by the end of the next 
business day with instructions regarding online registration and payment
  for the class.
</p>
@endsection

@section('sidebar')
  <kbd class="ouc">Edit Sidebar</kbd>
  Editable region  
@endsection