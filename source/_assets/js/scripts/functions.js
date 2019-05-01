// Namespace for older scripts
jQDatatel = {};

//dom update for tablet and lower views
$(document).ready(function () {
		var breakPoint = 767; //Breakpoint value goes here
		function orderElements() {
      console.log($(window).width())
      console.log(window.innerWidth)
			if (window.innerWidth > breakPoint) {  // if bigger than breakpoint
        // $('.navPage').insertAfter($('#ctl00_Main_fmPageNav'));
        $('.navPage').prependTo($('.sideContent'));
        $('#audienceNav').appendTo($('#header'));
        $('#auxNav').appendTo($('#auxnav-container'));        
			} else { // if tablet or smaller
        $('#audienceNav').insertBefore($('footer'));
        $('.navPage').insertAfter($('#current'));        
        $('#auxNav').appendTo($('#mainNav'));    
			}
		}
		orderElements();  //run immediately
		$(window).resize(orderElements);  //run on resize
	


	$('[placeholder]').focus(function () {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		}
	}).blur(function () {
		var input = $(this);
		if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		}
	}).blur().parents('form').submit(function () {
		$(this).find('[placeholder]').each(function () {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
			}
		})
	});
});

/*

window.yepnope({
	test: $('.rotator').length > 0,
	yep: {
		'carousel': '/client/scripts/jquery.caroufredsel-6.2.1-packed.js',
		'touchswipe': '/client/scripts/helper-plugins/jquery.touchSwipe.min.js'
	},
	callback: {
		'touchswipe': function (url, result, key) {
			$(document).ready(function () {
				$(".rotator").carouFredSel({
					width: "100%",
					height: "auto",
					responsive: true,
					items: {
						visible: 1
					},
					scroll: {
						pauseOnHover: true,
						easing: "linear"
					},
					swipe: true

				});
				$(".rotator").each(function () {
					$(this).trigger("configuration",
							{
							scroll: {
								fx: $(this).data('fx'),
								pauseOnHover: $(this).data('pause')
							},
							auto: $(this).data('delay'),
							prev: $(this).data('prev'),
							next: $(this).data('next'),
							pagination: $(this).data('pagination')
							}
					);
				});
			});
		}
	}
});
*/