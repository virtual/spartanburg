<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="google-site-verification" content="wg8g-8fYSOaBIbLLJ2qQsRnE_rHckvXHdLyN5Ik7ISI" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="theme-color" content="#2e4380">
  <title>@yield('pagetitle') : Spartanburg Community College</title>
  <meta property="og:title" content="@yield('pagetitle') : Spartanburg Community College" />
  @include('_partials/headcode')
</head>

<body>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

  @include('_partials.header')
  <!-- @include('_partials.topbar')  -->


  <!-- ! USED for courses and /cce -->
  <!-- INTERIOR -->

  <section id="pageContent" name="Lower Header" role="banner" aria-label="Lower Header">

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          @include('_partials/breadcrumbs')

          <h1>@yield('pagetitle')</h1>

        </div>
      </div>
      <div class="row-fluid">

        <div class="span9 mainContent">
            
          <!-- ltrImage -> couldn't find code -->
            

          <!-- ltrOutputStream - Major - Details.xslt -->
          <section class="major">
          <h2>Information/Programs</h2>
          <div class="requirements">
            Editable region or Multiedit WYSIWYG
          </div>

          @include('_partials/progoption-acalog')

          <h2>Overview</h2>
          <div class="overview">
            <a href="/apply" class="button" id="majorApply">Apply Today!</a>
            Editable region or Multiedit WYSIWYG
          </div>

          <!-- if Costs -->
          <h2>Tuition and Other Fees</h2>
          <div class="costs">
            Editable region or Multiedit WYSIWYG
          </div>
          <!-- end if Costs -->
          <!-- end ltrOutputStream - Major - Details.xslt -->


        </div>
        <div class="span3 sideContent">

          <!-- ltrSummary - Major - Teaser.xslt -->
          <section class="majorSummary">
            <section class="majorImage">
              <img src="{{ $page->baseUrl }}/resources/images/majors/accounting-pgm-pic(1).jpg"
                alt="a man writing with a pen" />
            </section>
            Enroll now!
          </section>
          <!-- end ltrSummary - Major - Teaser.xslt -->
          


          @if (trim($__env->yieldContent('left-nav')))
          <!-- Navigation - Inpage -->
          @include ('_partials/left-nav')
          @endif



         
          <!-- ltrSidebar - Major - Sidebar.xslt -->
          <a href="#" class="majorEmployment">
            <strong>Employment Outlook</strong>
            CIP Code: EmploymentCode
          </a>


          @yield('sidebar')

          <!-- relMajors Major - Related.xslt -->
          <section class="majorRelated">
            <h2>
              Related Programs
            </h2>
            <nav>
              <ul>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
              </ul>
            </nav>
          </section>


        </div>


      </div><!-- / row-fluid -->
    </div>
  </section>

  <!-- FOOTER -->
  @include('_partials/footer')

  <script src="{{ $page->baseUrl }}/assets/js/jquery.qtip.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/curriculumTooltip.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/major-app.js"></script>

  @yield('footcode')
</body>

</html>