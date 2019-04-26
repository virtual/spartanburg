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

  <meta name="theme-color" content="#003d7b">
  <title>@yield('pagetitle') | Spartanburg Community College</title>
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


  @if (trim($__env->yieldContent('template-newsdetail')))
  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/prettyPhoto.css" /> 
  @endif

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




















<!-- INTERIOR TEMPLATE -->
@if ((trim($__env->yieldContent('left-nav'))) && (trim($__env->yieldContent('main-sidebar-content'))))
<div class="layout-has-left-nav layout-has-sidebar layout-master page-interior" id="content">
@elseif (trim($__env->yieldContent('left-nav'))) <div class="layout-has-left-nav layout-master page-interior" id="content">
@elseif (trim($__env->yieldContent('main-sidebar-content'))) <div class="layout-has-sidebar layout-master page-interior" id="content">
@else<div class="layout-master page-interior" id="content"> @endif 
      
    <!-- CONTENT HEADER ON -->
    @if (trim($__env->yieldContent('content-header')))
    <!-- has content header -->
    @if ((trim($__env->yieldContent('custom-h1'))))<div class="content-header custom-heading-text">@else<div class="content-header ">@endif
      <div class="header-image-overlay">
        <div class="container">
          <div class="header-info">
            <div class="header-content">
                @if ((trim($__env->yieldContent('custom-h1'))))
                 @yield('custom-h1')
                @else 
                  <h1>@yield('pagetitle')</h1>
                @endif
            </div>
          </div>
        </div><!-- end header info -->
      </div><!-- end container-fluid -->
    </div><!-- end content-header -->
    @endif

    <div class="container">
      <div class="flex-layout-body">

 
        <!-- if left nav -->
        @if (trim($__env->yieldContent('left-nav')))
        <div class="left-nav">
          <a class="sr-only show-on-focus" href="#interior">Skip Navigation</a>
          @yield('left-nav')
        </div>
        @endif
        <!-- end if left nav -->

        <main class="content-container">
          <div class="content-section ">
            <div class="breadcrumb" aria-label="breadcrumb">
              
            </div>
            @if (!(trim($__env->yieldContent('content-header'))))<h1>@yield('pagetitle')</h1>@endif
            @if (trim($__env->yieldContent('lead'))) 
            <div class="content-lead">
              @yield('lead') 
            </div>
            @endif 
            <div class="content-interior-wrapper">
              <div id="interior">
                @yield('content')
              </div>

              <!-- sidebar on -->
                @if (trim($__env->yieldContent('main-sidebar-content')))
                <div id="sidebar" class="sidebar-container">
                  @yield('main-sidebar-content')
                </div>                
                @endif
              <!-- end sidebar on -->
            </div>
          </div>
        </main>

       
 
            <!-- end layout has class-->
          </div> <!-- END .flex-layout-body -->
        </div><!-- END .container-fluid --> 
    </div><!-- END .layout-master page-interior -->
    <!-- end INTERIOR TEMPLATE -->
  <!-- end interior -->



  @if (trim($__env->yieldContent('locations'))) 
  <div class="locations">
    @include('_partials/locations')  
  </div>
  @endif

    <!-- FOOTER -->
    @include('_partials/footer')
      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>  
 

  @if (trim($__env->yieldContent('template-newsdetail')))
	<script src="{{ $page->baseUrl }}/assets/js/jquery.prettyPhoto.js"></script>
	<script src="{{ $page->baseUrl }}/assets/js/prettyPhoto-app.js"></script>
  @endif

  <!-- SiteImprove Analytics -->
  <!-- End SiteImprove Analytics -->
    
</body>
</html>