@extends('_layouts.master')

@section('pagetitle')
News Archive
@endsection

@section('breadcrumb')
@include('_partials/breadcrumbs')
@endsection
 
 
@section('content') 

<section class="newsArchive">
  <!-- Ask about adding pagination?  -->
  <h2>April 2019</h2>
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-26">Apr 26, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905920">Spring Fling 2019 Features Kids Zone Sponsored by SCC</a></h3><p class="teaser">Spring Fling can be especially fun for kids, and there will be a Family Fun Zone featuring an array of rides and inflatables, with plenty of activities that will allow children to explore the world of STEAM (science, technology, engineering, arts and math).</p></div></div>
 
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-04">Apr 4, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905834">SCC Faculty &amp; Staff Honored at the SCTEA State-Wide Conference</a></h3><p class="teaser">SCC faculty and staff members were recently honored for exemplary service at the South Carolina Technical Education Association's annual professional development conference.</p></div></div>
 
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-04">Apr 4, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905831">SCC Names Dr. Benita Yowe Dean of the School of Health Sciences</a></h3><p class="teaser">Dr. Benita Yowe has been named the Dean of the School of Health Sciences at SCC.</p></div></div>
  
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-04">Apr 4, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905830">SCC Welcomes Shawn Masto as Grants Coordinator  </a></h3><p class="teaser">SCC recently welcomed Shawn Masto as the Grants Coordinator, where she will be responsible for managing grants received by college and the SCC Foundation.</p></div></div>
  
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-04">Apr 4, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905826">SCC Foundation endows memorial scholarship for Blacksburg High grads</a></h3><p class="teaser">The SCC Foundation recently endowed a scholarship for Blacksburg High School seniors in memory of longtime teacher, coach and mentor Ginger Horton.</p></div></div>
  
  <div class="row-fluid"><div class="span12"><time datetime="2019-04-02">Apr 2, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905817">Bates named Student of the Year</a></h3><p class="teaser">Kayson Bates won the “Student of the Year” award in Union County, sponsored by Spartanburg Community College.</p></div></div>
  
  <h2>March 2019</h2><div class="row-fluid"><div class="span12"><time datetime="2019-03-22">Mar 22, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905791">SCC Awards 2019 Economic Visionaries</a></h3><p class="teaser">Four exceptional Upstate companies were named 2019 Economic Visionaries by Spartanburg Community College at the annual Economic Visionaries event held at the Spartanburg Marriott on Thursday evening, March 21. Congratulations to AWL, Lockhart Power, POLYDECK and Duke Energy.</p></div></div>
  
  <div class="row-fluid"><div class="span12"><time datetime="2019-03-21">Mar 21, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905794">SCC and Partners for Active Living Announce Newest BCycles &amp; Bike Sharing Initiative</a></h3><p class="teaser">SCC and Partners for Active Living have joined forces to promote bicycling in Downtown Spartanburg thanks to the addition of a sixth bike sharing location and 11 new BCycles at SCC's Downtown Campus.</p></div></div>
  
  <div class="row-fluid"><div class="span12"><time datetime="2019-03-20">Mar 20, 2019</time><h3><a href="/client/NewsDetail.aspx?id=12884905797">SCC Presents No Small Matter: Early Education Documentary</a></h3><p class="teaser">SCC is presenting a 70-minute documentary film illustrating the impact of high-quality early childhood educational experiences. </p></div></div>
  
  
  <div class="pagination pull-right">
      <ul>
        <li><a class="disabled" href="#">Previous</a></li>
        <li><a class="active" href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">Next</a></li>
      </ul>
    </div>


</section>

@endsection
  
@section('left-nav')
<section class="navPage">
  <nav><ul><li class="current"><a target="_self" href="/news/" title="Past News Stories">Past News Stories</a></li></ul></nav>
</section>
@endsection  

 