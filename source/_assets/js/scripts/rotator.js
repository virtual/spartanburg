$(document).ready(function () {
			
		
			$(".rotator").carouFredSel({
				
				width: "100%",
				height: "auto",
				responsive: true,
				items: {
					visible: 1
				},
				pagination : {
					container   : "#Pagination"
				},

				scroll: {
					pauseOnHover: true,
					easing: "linear",
					fx: "crossfade"


				},
				swipe: true

			});
		

		});