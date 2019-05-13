function runRotator() {
  if ($('.rotator')[0]) {
    $(".rotator").carouFredSel({
      width: "100%",
      height: "auto",
      responsive: true,
      items: {
        visible: 1
      },
      pagination: {
        container: 
        function(){
            return $(this).parents('.homeCarousel').find('.pagination');
        }
      },
      scroll: {
        pauseOnHover: true,
        easing: "linear",
        fx: "crossfade"
      },
      swipe: true
    });
  }
}

runRotator();  //run immediately
$(window).resize(runRotator);  //run on resize