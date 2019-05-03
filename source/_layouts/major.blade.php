<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
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

  <!-- INTERIOR -->
  <div id="pageContent">

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          @include('_partials/breadcrumbs')

          <h1>@yield('pagetitle')</h1>

        </div>
      </div>
      <div class="row-fluid">

        <main class="span9 mainContent content-main">
            
          <!-- ltrImage -> couldn't find code -->
            

          <!-- ltrOutputStream - Major - Details.xslt -->
          <div class="major">
            <section class="requirements">
              <h2>Information/Programs</h2>
              <p>Editable region or Multiedit WYSIWYG</p>
            </section>

          @include('_partials/progoption-acalog')

          <section class="overview">
              <h2>Overview</h2>
            <a href="/apply" class="button" id="majorApply">Apply Today!</a>
            <p>Editable region or Multiedit WYSIWYG</p>
          </section>

          <!-- if Costs -->
          <section class="costs">
              <h2>Tuition and Other Fees</h2>
            <p>Editable region or Multiedit WYSIWYG</p>
          </section>
          <!-- end if Costs -->
          <!-- end ltrOutputStream - Major - Details.xslt -->
        </div>

        </main>
        <div class="span3 sideContent">

          <!-- ltrSummary - Major - Teaser.xslt -->
          <div class="majorSummary">
            <div class="majorImage">
              <img src="{{ $page->baseUrl }}/resources/images/majors/accounting-pgm-pic(1).jpg"
                alt="a man writing with a pen" />
            </div>
            Enroll now!
          </div>
          <!-- end ltrSummary - Major - Teaser.xslt -->
          


          @if (trim($__env->yieldContent('left-nav')))
          <!-- Navigation - Inpage -->
          @include ('_partials/left-nav')
          @endif



         
          <!-- ltrSidebar - Major - Sidebar.xslt -->
          <!-- "No, we don’t use that if you want to omit." - Jane -->
          <!-- <a href="#" class="majorEmployment">
            <strong>Employment Outlook</strong>
            CIP Code: EmploymentCode
          </a> -->


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
  </div>

  <!-- FOOTER -->
  @include('_partials/footer')

  <script src="{{ $page->baseUrl }}/assets/js/jquery.qtip.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/curriculumTooltip.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/major-app.js"></script>

  @yield('footcode')
</body>

</html>