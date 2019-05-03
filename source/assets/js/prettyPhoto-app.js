$(document).ready(function () {
  $('#detailImageSet').carousel({
    interval: 3500
  })
  $("a[data-gal^='prettyPhoto']").prettyPhoto({ theme: 'light_square' })
});