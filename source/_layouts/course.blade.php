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

  <!-- ! USED for courses and /cce -->
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
          <!-- ! Course - Detail Multiedit -->
          <!-- https://www.sccsc.edu/client/coursedetail.aspx?courseID=534&programID=7828&majorID=7951 -->
          <section class="CourseDetail">
            <h2 class="sr-only">Course Information</h2>
            <div class="courseinfo">
              Colleague Description from export
            </div>
            <div class="coursedescription">
              <kbd class="ouc">Edit</kbd>
              @yield('content')
            </div>

            @yield('reginfo')

            <p class="alert">DO NOT SHOW THESE FIELDS IF CORRELATED INPUT IS EMPTY</p>


            <div class="courseDetailData row-fluid">
              <div class="span3 courseDetailDataTitle">
                Prerequisites
              </div>
              <div class="span9">Take ENG-100 or ENG-165 and RDG-100 with a&nbsp;
                minimum grade C.&nbsp;
              </div>
            </div>
            <div class="courseDetailData row-fluid">
              <div class="span3 courseDetailDataTitle">
                Classes Available
              </div>
              <div class="span9">
                <div class="reginfo"> 
                  @yield('classinfo')
                </div>
              </div>
            </div>
            <div class="courseDetailData row-fluid">
              <div class="span3 courseDetailDataTitle">
                Cost
              </div>
              <div class="span9">
                $380
              </div>
            </div>

            <div class="paybutton text-center">
              <p><a class="button apply" href="/client/TwoColumnCE.aspx?pageid=12884904761" target="_blank">Complete
                  Policy Form then Pay Online</a></p>
            </div>

          </section>








        </main>
        <div class="span3 sideContent">
          @if (trim($__env->yieldContent('left-nav')))
          <!-- Navigation - Inpage -->
          @include ('_partials/left-nav')
          @endif


          <!-- Dynamically generated -->
          <div class="programReturn">
            <a href="/accounting/" class="button returnToProgram">Return to Accounting</a>
          </div>

          <!-- Asset: Apply Banner -->
          <div>
            <a href="https://sccsc.elluciancrmrecruit.com/Apply" target="_self" title="Apply now online"
              class="button apply">Apply Now!</a>
          </div>
          <!-- end Asset: Apply Banner -->

          @yield('sidebar')

        </div>


      </div><!-- / row-fluid -->
    </div>
  </div>

  <!-- FOOTER -->
  @include('_partials/footer')

  <script src="{{ $page->baseUrl }}/assets/js/jquery.prettyPhoto.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/prettyPhoto-app.js"></script>

  @yield('footcode')
</body>

</html>