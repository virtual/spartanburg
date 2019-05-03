@extends('_layouts.master')

@section('pagetitle')
Interior with Snippets
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection


@section('content')

<!-- Banner - InPage -->
@include('_partials/banner-inpage')

<h2>Rotator - In Page</h2>
@include('_partials/rotator-inpage', [
'style' => ''
])

<h2>Rotator - In Page (Side Caption enabled)</h2>
@include('_partials/rotator-inpage', [
'style' => 'pageCarouselSideCap'
])




@include('_partials.accordion', [
'style' => '',
'SectionTitle' => 'Steps Accordion - Default'
])

@include('_partials.accordion', [
'style' => '2',
'SectionTitle' => 'Steps Accordion - Style 2'
])

<!-- "Yes, merging is fine, so we will have those [Style 1 and 2 only; Style 3 merges to Style 2] two options." - Jane -->
<!-- @include('_partials.accordion', [
'style' => '3',
'SectionTitle' => 'Steps Accordion - Style 3'
]) -->

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, explicabo expedita alias corrupti molestiae enim
  aspernatur consequatur illum est a beatae nemo eum voluptates vitae corporis ab ipsam incidunt dolorum.</p>

<h2>Link Set Snippet</h2>
@include('_partials/linkset')

@include('_partials/dropzones')

<h2>YouTube Video Embed</h2>
@include('_partials/video')


<h2>Example of video snippet use in 2-column snippet</h2>
<div class="row-fluid">
  <div class="span6">@include('_partials/video')</div>
  <div class="span6">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur vitae vero laborum iusto recusandae
      veritatis nam magnam, perferendis officiis dolorum a nobis obcaecati exercitationem dolor praesentium eveniet?
      Corrupti, deserunt amet.</p>
  </div>

</div>

<section class="modEvents">
    <h2>Events - Student Life</h2>
    <div class="details"><a href="https://calendar.sccsc.edu" class="viewAll">Full Calendar</a><p>5/9/2019 <br/><a class="h4" href="https://calendar.sccsc.edu/event/grad19/">Graduation Commencement</a></p></div>
</section>

<h2>Events - Academic Calendar</h2>
<div>
  <ul>
    <li>August 06: <a
        href="https://calendar.sccsc.edu/event/financial-aid-students-may-purchase-books-for-fall-2018/">Financial Aid
        students may purchase books for Fall 2018</a></li>
    <li>August 06: <a href="https://calendar.sccsc.edu/event/book-inn---adjusted-hours-830am-6pm/">Book Inn - Adjusted
        Hours
        8:30am-6pm</a></li>
    <li>August 09: <a href="https://calendar.sccsc.edu/event/auto-callsemails-to-registered-not-paid/">AUTO CALLS/EMAILS
        TO REGISTERED NOT
        PAID</a></li>
    <li>August 10: <a href="https://calendar.sccsc.edu/event/book-inn---adjusted-hours-830am-1pm-1/">Book Inn -
        Adjusted Hours 8:30am-1pm</a></li>
    <li>August 13: <a href="https://calendar.sccsc.edu/event/deletion-of-non-paid-students-at-500-pm-2/">Deletion of
        non-paid students at
        5:00 pm.</a></li>
  </ul>
</div>
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