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
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed"
    href="{{ $page->baseUrl }}/resources/images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="{{ $page->baseUrl }}/resources/images/ico/favicon.ico">


  <link rel="stylesheet" href="{{ $page->baseUrl }}/assets/css/prettyPhoto.css" />

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

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <!-- Navigation - Breadcrumb - Detail -->
          @include('_partials/breadcrumbs-newsdetail')
          <!-- end Navigation - Breadcrumb - Detail -->
        </div>
      </div>
      <div class="row-fluid">

        <!--! Content: News - Detail -->
        <div class="span12 newsTitle">
          <h1>@yield('pagetitle')</h1>
          <time datetime="2019-01-07">Posted: January 7, 2019</time>
        </div>
        <div class="span9 modNewsDetail">
          <!-- gallery asset -->
          <div id="detailImageSet" class="carousel slide">
            <div class="carousel-inner">
              <!-- add class active to first one .item only -->
              <div class="item active">
                <a href="{{ $page->baseUrl }}/resources/images/news-stories/spark-entrance.jpg" 
                  rel="prettyPhoto[newsDetail]" title="Spark Entrance">
                  <img src="{{ $page->baseUrl }}/resources/images/news-stories/spark-entrance.jpg" alt="Spark Entrance" />
                </a>
                <div class="imgCaption">
                    Spark Entrance
                </div>
              </div>
              <div class="item">
                <a href="{{ $page->baseUrl }}/resources/images/news-stories/socheata-student-feature.jpg" 
                  rel="prettyPhoto[newsDetail]" title="Socheata">
                  <img src="{{ $page->baseUrl }}/resources/images/news-stories/socheata-student-feature.jpg" alt="socheata-student-feature" />
                </a>
                <div class="imgCaption">
                    Socheata
                </div>
              </div>
            </div>
          </div>
          <!-- end gallery asset -->
          <!-- if author not empty -->
          <div class="author">
            Article by:&#160;AUTHOR
          </div>
          <div class="article">
            @yield('content')
          </div>
        </div>

        <!--! Content: News - Related -->
        <!-- If the collection of related news is > 0  -->
        <section class=" span3 relatedNews">
            <h2>Related Stories</h2>

            <article class="item"><h3><a href="#" class="title">News Article Title</a></h3></article>
            <article class="item"><h3><a href="#" class="title">News Article Title</a></h3></article>
            <article class="item"><h3><a href="#" class="title">News Article Title</a></h3></article>
            <article class="item"><h3><a href="#" class="title">News Article Title</a></h3></article>

            <a class="more" href="/news/">More News</a>
          </section>
        <!-- end related -->

      </div><!-- / row-fluid -->
    </div>
  </section>

  <!-- FOOTER -->
  @include('_partials/footer')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/main.js"></script>


  <script src="{{ $page->baseUrl }}/assets/js/jquery.prettyPhoto.js"></script>
  <script src="{{ $page->baseUrl }}/assets/js/prettyPhoto-app.js"></script>

  <!-- SiteImprove Analytics -->
  <!-- End SiteImprove Analytics -->

</body>

</html>