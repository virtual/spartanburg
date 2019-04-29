<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
          <!-- ! Course - Detail Multiedit -->   
          <!-- https://www.sccsc.edu/client/coursedetail.aspx?courseID=534&programID=7828&majorID=7951 -->
          <section class=" CourseDetail">
              <p class="coursedescription">This is a (college transfer) course in which the following topics are presented: a study of composition in conjunction with appropriate literary selections, with frequent theme assignments to reinforce effective writing. A review of standard usage and the basic techniques of research are also presented.</p>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Academic Level
                    </div>
                <div class=" span8">Undergraduate</div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Subject
                    </div>
                <div class=" span8">English</div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Department
                    </div>
                <div class=" span8">Humanities and Languages</div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Credits
                    </div>
                <div class=" span8">3</div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Prerequisites
                    </div>
                <div class=" span8">Take ENG-100 or ENG-165 and RDG-100 with a&nbsp;
                          minimum grade C.&nbsp;
                          </div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Corequisites
                    </div>
                <div class=" span8">
                          None
                        </div>
              </div>
              <div class="courseDetailData row-fluid">
                <div class=" span4 courseDetailDataTitle">
                      Course Syllabus
                    </div>
                <div class=" span8">
                  <a href="https://lor1.sccsc.edu/syllabus/eng-101/" target="_blank">ENG 101</a>
                </div>
              </div>
            </section>








          </div>
          <div class="span3 sideContent">	
              @if (trim($__env->yieldContent('left-nav')))
                <!-- Navigation - Inpage -->
                @include ('_partials/left-nav')
              @endif


              <!-- Dynamically generated -->
              <section class="programReturn"> 
                <a href="/accounting/" class="button returnToProgram">Return to Accounting</a>
              </section>

              <!-- Asset: Apply Banner -->
              <div>
                <a href="https://sccsc.elluciancrmrecruit.com/Apply" target="_self" title="Apply now online" class="button apply">Apply Now!</a>
              </div>
              <!-- end Asset: Apply Banner -->

              @yield('sidebar')

            </div>


      </div><!-- / row-fluid -->
    </div>
  </section>

  <!-- FOOTER -->
  @include('_partials/footer')

  <script src="{{ $page->baseUrl }}/assets/js/jquery.prettyPhoto.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/prettyPhoto-app.js"></script>
  
  @yield('footcode')
</body>
</html>