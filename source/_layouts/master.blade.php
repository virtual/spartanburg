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
      
    <!-- TwoColumnAlt -->
<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">

        <!-- Navigation - Breadcrumb -->
        @yield('breadcrumb')

        <!-- TODO: Seems like NewsDetail might not print subdir breadcrumbs? -->
        <!-- end Navigation - Breadcrumb -->
			 
				<h1>@yield('pagetitle')</h1>

			</div>
		</div>
		<div class="row-fluid">

        @if ((trim($__env->yieldContent('left-nav'))) || (trim($__env->yieldContent('sidebar'))))
        <main class="span9 mainContent content-main">
            <!-- dzMain -->
          @yield('content')
        </main>

        <div class="span3 sideContent content-sidebar">	 
          <!-- Navigation - Inpage -->   
          @yield('left-nav')
          <!-- dzSide -->
          
          @yield('sidebar')
          
        </div>
       
        @else
        <!--! Adding a full-width option -->
        <main class="span12 mainContent content-main">	 
          @yield('content')
        </main>
        
        @endif

      </div><!-- / row-fluid -->
	</div>

    <!-- end TwoColumnAlt -->
 

</div>
 


    <!-- FOOTER -->
    @include('_partials/footer')
    
    @yield('footcode')
</body>
</html>