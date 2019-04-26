$(document).ready(function () {
	var breakPt = 767; //Breakpoint value goes here
	function orderTips() {
			if ($(window).width() > breakPt) {  // if bigger than breakpoint
				$('[data-hasqtip]').qtip('enable');
			}
			if ($(window).width() < breakPt) { // if tablet or smaller
				$('[data-hasqtip]').qtip('hide').qtip('disable');
			}
		}
		orderTips();  //run immediately
		$(window).resize(orderTips);  //run on resize
	$('.course').qtip({
		content: {
			text: function(event, api) {
				$.ajax({
					url: '/getJSONContent.ashx', // URL to the JSON file
					type: 'GET', // POST or GET
					dataType: 'json', // Tell it we're retrieving JSON
					data: {
						id: $(this).data('courseid') // Pass through the ID of the current element matched by '.selector'
					},
				})
				.then(function(data) {
					/* Process the retrieved JSON object
					 *    Retrieve a specific attribute from our parsed
					 *    JSON string and set the tooltip content.
					 */
					var content = 'My name is ' + data.root.CourseName;
					var title = data.root.CourseName + '<div class="subtitle">' + data.root.CourseTitle + '</div>';
					var credits = (data.root.CourseMinCred != null) ? data.root.CourseMinCred : 'N/A';
					var coreqs = '';
					
					if (!(Array.isArray(data.root.CourseCoreqsAssoc))) {
						if (data.root.CourseCoreqsAssoc.Coreq != null) {
							coreqs = '<div class="courseprereq"><strong>Coreqs:</strong><ul> ';
							coreqs += '<li>' + data.root.CourseCoreqsAssoc.Name + ' ' + data.root.CourseCoreqsAssoc.Title + '</li>';
							coreqs += '</ul></div>';
						}
					} else {
						
						coreqs = '<div class="courseprereq"><strong>Coreqs:</strong><ul> ';
						for(var i = 0; i<data.root.CourseCoreqsAssoc.length;i++) {
							coreqs += '<li>' + data.root.CourseCoreqsAssoc[i].Name + ' ' + data.root.CourseCoreqsAssoc[i].Title + '</li>';
						}
						coreqs += '</ul></div>';
					}
					
					
					var prereqs = '';
					if (data.root.CoursePrereqs !== null) {
						prereqs = '<div class="courseprereq"><strong>Prereqs:</strong> ';
						if (Array.isArray(data.root.CoursePrereqsAssoc)) {
							for(var i = 0; i<data.root.CoursePrereqsAssoc.length;i++) {
								prereqs += data.root.CoursePrereqsAssoc[i].Prereq + ' ';
							}
						} else {
							prereqs += data.root.CoursePrereqsAssoc.Prereq;
						}
						prereqs += '</div>';
					}
					var footer = '<div class="clearfix coursedata"><div class="left">' + data.root.CourseAcadLevel + '</div><div class="right">Credits: ' + credits + '</div></div>';
					var body = '<div class="coursedesc">' + data.root.CourseDescription + '</div>';
					// Now we set the content manually (required!)
					api.set('content.title', title);
					api.set('content.text', body + coreqs + prereqs + footer);
				}, function(xhr, status, error) {
					// Upon failure... set the tooltip content to the status and error value
					api.set('content.text', status + ': ' + error);
				});

				return '<img class="throbber" src="/client/images/throbber.gif" alt="Loading..." />';// Set some initial loading text
			}
		},
		position: {
			my: 'left center',
			at: 'right center',
			effect: false,
			adjust: { x:10, method: 'shift shift' },
			viewport: true
		}, 
		style: {
			def: false,
			classes: 'qtip-scc',
			width: 320
		}
	});
});