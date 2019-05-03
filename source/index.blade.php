@extends('_layouts.home')

@section('headcode')

@endsection

@section('footcode')
@endsection

@section('hero')
@endsection

@section ('subfeature')
@endsection

@section('carousel')
<div class="homeCarousel">
  <div class="rotator">

    <div class="item"><img src="{{ $page->baseUrl }}/resources/images/carousel/Rotator-Connect-2016.jpg"
        alt="Connect with SCC rotator graphic">
      <div class="caption">
        <h2>Stay Informed with MySCC Calendar and MORE!</h2>
        <p>Want to know what is going on? There's an app for that! Download our free mobile app, join the SCC
          active calendar, Facebook, Instagram and more to keep up with deadlines and events. Did you know we
          even offer technical support for email, too?</p>
        <a href="/scc-connect" title="Connect with SCC social media and more">
          Read More
        </a>
      </div>
    </div>

    <div class="item"><img src="{{ $page->baseUrl }}/resources/images/carousel/Rotator-HubCenter-2019.jpg?n=2838"
        alt="Hub Center Rotator photo">
      <div class="caption">
        <h2>What's Going on at SCC?</h2>
        <p>Keep up with Student Life events, concerts, Lyceum Series, speakers and more with MySCC Calendar.</p>
        <a href="/studentlife" title="Student Life events MySCC Calendar">
          Read More
        </a>
      </div>
    </div>

    <div class="item"><img src="{{ $page->baseUrl }}/resources/images/carousel/Rotator-MySCCapp.jpg?n=5122"
        alt="MySCC App rotator">
      <div class="caption">
        <h2>Welcome to SCC! Download MySCC App...</h2>
        <p>Download FREE MySCC App to access your student account and view information on classes, calendar,
          announcements and even registration! </p><a href="/scc-connect" title="MySCC App and more">
          Read More
        </a>
      </div>
    </div>

  </div>
  <div class="pagination" id="homePagination">&nbsp;</div>
</div>
@endsection

@section('content')

@endsection


@section('sidebar')
<div id="whatToDo">
  <h2>What do you want to do?</h2>
  <div class="row-fluid slide">
    <div class="toggle purple span6 alt">Earn a Certificate or Degree</div>
    <div class="purple details panel">
      <div class="title">Earn a Certificate or Degree</div>
      <p>Begin your
        college career at SCC whether you're looking for a degree or certificate
        program to prepare you for a skilled job, or you want to transfer to a 4-year
        college. </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <a class="more" href="/schools-list">Read More</a><a class="close">Close</a>
    </div>
    <div class="toggle orange span6">Personal &amp; Professional Development</div>
    <div class="orange details panel">
      <div class="title">Personal &amp; Professional Development</div>
      <p>Do
        you need certification for your current job, or you want to obtain skills for a
        new job or a hobby? SCC's Corporate and Community Education has what you need
        for personal and professional development.</p>
      <p>&nbsp;</p>
      <a class="more" href="/cce">Read More</a><a class="close">Close</a>
    </div>
    <div class="toggle blue span6 alt">Search for Classes &amp; Schedules</div>
    <div class="blue details panel">
      <div class="title">Search for Classes &amp; Schedules</div>
      <p>Use our <a title="Search for Classes and Schedule Information"
          href="https://sccwaprod.sccsc.edu/WebAdvisor/WebAdvisor?type=P&amp;pid=ST-WESTS12A&amp;PROCESS=-ST-WESTS12A">Search
          for Classes</a> tool to find classes you want in the schedule you need.</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <a class="more"
        href="https://sccwaprod.sccsc.edu/WebAdvisor/WebAdvisor?type=P&amp;pid=ST-WESTS12A&amp;PROCESS=-ST-WESTS12A"
       >Read More</a><a class="close">Close</a>
    </div>
    <div class="toggle yellow span6">Develop Your Business: The Spark</div>
    <div class="yellow details panel">
      <div class="title">Develop Your Business: The Spark</div>
      <p>Looking for a way to start,
        develop and grow your business? Spark Center SC - known as the Spark - has everything you need.</p>
      <p><br><span id="ektronTempNode">&nbsp;</span></p>
      <a class="more" href="/Center/">Read More</a><a class="close">Close</a>
    </div>
  </div>
  <p><a class="button" href="https://sccsc.ellucianCRMrecruit.com/apply">Apply Now!</a></p>
  <p><a class="button blue" href="/catalog">View Catalog</a></p>
</div>
@endsection


@section('social')
<div id="connect" role="complementary">
  <h3 class="span4">SCC Connect</h3>
  <ul class="span8 social">
    <li class="fb"><a href="https://www.facebook.com/YourCollege" target="_blank">Facebook</a></li>
    <li class="twitter"><a href="https://twitter.com/sccyourcollege" target="_blank">Twitter</a></li>
    <li class="flickr"><a href="http://www.flickr.com/photos/sccsc/sets/" target="_blank">Flickr</a></li>
    <li class="youtube"><a href="http://www.youtube.com/user/SpartanburgCommColl" target="_blank">YouTube</a>
    </li>
    <li class="instagram"><a href="http://www.instagram.com/spartanburgcommunitycollege" target="_blank">Instagram</a>
    </li>
  </ul><a href="/alert"><img src="{{ $page->baseUrl }}/resources/images/Alert-SCC.jpg" alt="SCC Alert"
      style="width:43px;height:43px;"></a><small>
      <a href="/alert">Receive emergency and closing alerts from SCC</a> 
  </small>
</div>
@endsection