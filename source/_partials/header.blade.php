<header id="header">
   
   <div>
      <p><a class="show-on-focus sr-only" href="#pageContent">Skip to Main Content</a></p>
    </div>
   
  <div class="navbar" role="navigation" aria-label="Audience">
    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar">
      </span>
    </button>
    <div class="container-fluid header-banner" role="banner" aria-label="Header">
      <div class="row-fluid">
        <div class="span5">
          <a class="logo" href="/home">Spartanburg Community College</a>
         
         
        </div>
        <div class="span7">
          <!-- AuxNav -->
          <div id="auxnav-container">
            @include ('_partials.topnav')
          </div>

          <!-- searchCtrl -->
        @include ('_partials.searchform') 

        </div>
      </div>
      
      
        

    </div>
    <div class="nav-collapse collapse" role="navigation" aria-label="Primary List">
      <!-- Navigation-Global -->
      @include ('_partials.menu')

      
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

@include('_partials.topbar') 