@extends('_layouts.master')

@section('pagetitle')
Programs &amp; Courses
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 
 
@include('_partials/rotator-inpage', [ 
'style' => 'pageCarouselSideCap'
])
<h3>At SCC, the Opportunities Are Endless.</h3>
<h4>Whether you are seeking a college degree, a career change, or professional development, SCC offers the programs and support you need to achieve your educational and career goals!&nbsp;</h4>
<p><strong><a href="/schools-list" title="Credit and Degree Programs">Credit and Degree Programs</a></strong><br>More than 70 programs of study in SCC's various Schools of Learning that lead to high-demand, high-growth careers or allow you to pursue a bachelor's degree through SCC's University Transfer Program.<br><br><a href="/cce/" title="Continuing Education"><strong>Continuing Education</strong></a><br>Workforce development and training that employers trust. SCC's Corporate &amp; Community Education division offers a solid foundation to prepare you for today's workforce through non-credit, short-term classes. Community Interest and Personal Enrichment classes are also available.&nbsp; <br><br><a href="/online/" target="_top" title="Online Learning"><strong>Online Learning</strong><br></a>SCC<em>Online</em> offers a variety of online courses, as well as&nbsp;five associate degrees and&nbsp;two certificates, that you can earn completely online. Search for classes to view online offerings and schedules.</p>
 
@endsection
   
@section('sidebar')

<kbd class="ouc">Edit Sidebar</kbd>
<p>Editable region; example: Alumni; does not allow edit of contact</p>

@include('_partials/video')

<!-- ! Driven by _sidebar.inc or similar -->
<section class="modContactInfo">
  <h2>Need Help?</h2> 
  <h3>Admissions Center</h3><strong>Address</strong>SCC Central Campus, Student Services Building<br>Mail to: PO Box
  4386, Spartanburg SC 29305<p><strong>Phone: </strong>(864) 592-4800</p>
  <p><strong>Toll Free: </strong>(866) 591-3700</p>
  <p><strong>Fax: </strong> (864) 592-4564</p>
  <p><strong>E-mail:</strong><a href="mailto:admissions@sccsc.edu">admissions@sccsc.edu</a></p>
  <p>Mon - Thu | 8:00am-6:00pm</p>
  <p>Friday | 8:00am-5:00pm</p>
  <p>&nbsp;</p>
  <p><a href="/tours" title="Schedule a Tour of SCC">Schedule a Tour of SCC</a></p>
</section>
@endsection