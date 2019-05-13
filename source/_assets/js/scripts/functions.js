// Namespace for older scripts
jQDatatel = {};

//dom update for tablet and lower views
$(document).ready(function () {
		var breakPoint = 767; //Breakpoint value goes here
		function orderElements() { 
			if (window.innerWidth > breakPoint) {  // if bigger than breakpoint
        // $('.navPage').insertAfter($('#ctl00_Main_fmPageNav'));
        $('.navPage').prependTo($('.sideContent'));
        $('#audienceNav').appendTo($('#header'));
        $('#auxNav').appendTo($('#auxnav-container'));        
			} else { // if tablet or smaller
        $('#audienceNav').insertAfter($('#header'));
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