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
  <title>Spartanburg Community College</title>
  <meta property="og:title" content="Spartanburg Community College" />
  @include('_partials/headcode')
</head>
<body>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

  @include('_partials.header')
  <!-- @include('_partials.topbar')  -->

 
  <!-- INTERIOR -->

  <section id="pageContent" name="Lower Header" role="banner" aria-label="Lower Header">
      
   
      <div id="homeContent" role="main" aria-label="Home Page Contents">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span8">
              @yield('carousel')
            </div>

            <div class="span4">
              @yield('sidebar')
              @yield('social')
            </div>
          </div>
        </div>
      </div>


    <div class="container-fluid">

        <!-- 2-Column Snippet (40% / 60%) (Homepage Dropzones) -->
      <div class="row-fluid">
        <div class="span5">
          <!-- dzFive -->
          @include('_partials/event-list')
        </div>
        <div class="span7">
          <!-- dzSeven  -->
          @include('_partials/news-list')
        </div>
      </div>
      <!-- end 2-Column Snippet (40% / 60%) (Homepage Dropzones) -->

    </div>
  </section>
 


    <!-- FOOTER -->
    @include('_partials/footer')
    
    @yield('footcode')
</body>
</html>