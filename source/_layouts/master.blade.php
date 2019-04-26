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
  <meta property="og:title" content="@yield('pagetitle') | Spartanburg Community College" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/thumbnail.jpg" />
  <meta property="og:url" content="https://sccsc.edu" />
  <meta property="og:site_name" content="Spartanburg Community College" />
  <meta property="og:description" content="Spartanburg Community College..." />
  <meta property="og:locale" content="en_us" />
  <link rel="image_src" href="{{ $page->baseUrl }}/resources/images/thumbnail.jpg" />

  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/main.css" /> 
  <!--[if lt IE 9]> 
		<link href="{{ $page->baseUrl }}/css/ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if lte IE 9]> 
		<link href="{{ $page->baseUrl }}/css/ie9.css" rel="stylesheet">
	<![endif]-->
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/oustyles.css" /> 
 
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="{{ $page->baseUrl }}/resources/images/ico/favicon.ico">

  <noscript>

  </noscript>
  @yield('headcode')
 

  <!-- Facebook Pixel Code --> 
  <!-- End Facebook Pixel Code -->
</head>
<body>
  <!-- Google Tag Manager -->
  <!-- End Google Tag Manager -->

  @include('_partials.header')
  <!-- @include('_partials.topbar')  -->

 
  <!-- INTERIOR -->

  <section id="pageContent" name="Lower Header" role="banner" aria-label="Lower Header">
      
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

 
        @if (trim($__env->yieldContent('left-nav')))

        <div class="span9 mainContent">

            @yield('content')
            

          </div>	<!--span9-->
          <div class="span3 sideContent">	
            <!-- Navigation - Inpage --> 
            
            <!-- dzSide -->
            dzSide

          </div>
        
        @else
        <!-- TwoColumnNoNav -->
        <div class="span3 mainContent">	
            <!-- dzSide -->
            dzSide

          </div>
          <div class="span9 sideContent">
            <!-- dzMain -->
            dzMain

            </div>
        <!-- end TwoColumnNoNav -->
        @endif
 
 

		</div><!-- / row-fluid -->
	</div>

    <!-- end TwoColumnAlt -->
 

  </section>
 


    <!-- FOOTER -->
    @include('_partials/footer')
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>  
 
 
  <!-- SiteImprove Analytics -->
  <!-- End SiteImprove Analytics -->
    
</body>
</html>