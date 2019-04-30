<?php $uniqueID = substr(md5(rand()), 0, 3); ?>
<?php $iter = 0 ?>
<h2>{{$SectionTitle}}</h2>

<ol class="modSteps{{$style}} stepsCollapse">
  <li>
    <h3 data-toggle="collapse" data-target="#data{{$uniqueID}}-{{$iter}}">
      Title1
    </h3>
    <div class="collapse" id="data{{$uniqueID}}-{{$iter}}">
      @include('_partials.nav-tab1')
    </div>
  </li>
  <?php $iter++; ?>
  <li>
    <h3 data-toggle="collapse" data-target="#data{{$uniqueID}}-{{$iter}}">
      Title2
    </h3>
    <div class="collapse" id="data{{$uniqueID}}-{{$iter}}">
      @include('_partials.nav-tab2')
    </div>
  </li>
  <?php $iter++; ?>
  <li>
    <h3 data-toggle="collapse" data-target="#data{{$uniqueID}}-{{$iter}}">
      Title3
    </h3>
    <div class="collapse" id="data{{$uniqueID}}-{{$iter}}">
      @include('_partials.nav-tab3')
    </div>
  </li>
</ol>