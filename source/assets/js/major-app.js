	$( document ).ready(function() {

			 if (window.location.hash) {
			   var AccordionSectionNumber = window.location.hash.substring(1);
			   AccordionBodyID = $(".programOption:nth-of-type(" + AccordionSectionNumber + ") .pHeader a").attr('href')
				  if (! (typeof AccordionBodyID === "undefined")) {
					$(AccordionBodyID).collapse('show');
					return true;
				  }
				}

			});
	