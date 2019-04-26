<header id="header">
  <div class="navbar" role="navigation" aria-label="Audience">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
      </span>
    </button>
    <div class="container-fluid" role="banner" aria-label="Header">
      <div class="row-fluid">
      </div>
      <div class="span5">
        <a class="logo" href="/home">Spartanburg Community College</a>
      </div>
      <!-- Jan 2017 Adding Accessibility Skip Nav Function JB -->
      <div id="skiptocontent">
        <a href="#pageContent">Skip to Main Content</a>
        <!-- END Jan 2017 Adding Accessibility Skip Nav Function JB -->

        <DTWCMS:search runat="server" id="searchCtrl"></DTWCMS:search>

      </div>
    </div>
    <div class="nav-collapse collapse" role="navigation" aria-label="Primary List">
      <!-- Navigation-Global -->
      @include ('_partials.menu')

      <!-- AuxNav -->
      <div class="container-fluid">
        @include ('_partials.topnav')
      </div>
    </div>

    @if (trim($__env->yieldContent('alert')))
    <!-- Alert -->
      @include('_partials.alert')
    @endif

    <!-- Navigation - Audience -->
    @include ('_partials.topnav2')

  </div>

  <!-- Google Translate Element -->
  <!-- / Google Translate Element -->

</header>