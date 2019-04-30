$(document).ready(function () {
  var slidewidth = $('#whatToDo').width();
  $('.slide .panel').css({
    left: -slidewidth,
    opacity: 0
  });
  $('.slide .toggle').click(function () {
    var $panel = $(this).next('.panel');
    $('.slide .panel').css({
      left: -slidewidth,
      opacity: 0
    });
    $panel.animate({
      left: parseInt($panel.css('left'), 10) == 0 ? -$panel.outerWidth() : 0,
      opacity: parseInt($panel.css('opacity'), 10) == 0 ? 1 : 0
    });
  });
  $('.slide .close').click(function () {
    var $panel = $(this).parent('.panel');
    $panel.animate({
      left: parseInt($panel.css('left'), 10) == 0 ? -$panel.outerWidth() : 0,
      opacity: parseInt($panel.css('opacity'), 10) == 0 ? 1 : 0
    });
  });
  $(".rotator").carouFredSel({
    width: "100%",
    height: "auto",
    responsive: true,
    items: {
      visible: 1
    },
    pagination: {
      container: "#homePagination"
    },
    scroll: {
      pauseOnHover: true,
      easing: "linear",
      fx: "crossfade"
    }
  });
});