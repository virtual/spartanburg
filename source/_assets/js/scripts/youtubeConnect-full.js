(function ($) {
	$.fn.youtubeConnect = function (options) {
		var opts, o, $thisBlock;
		opts = $.extend({}, $.fn.youtubeConnect.defaults, options);
		return this.each(function () {
			$thisBlock = $(this);
			o = $.extend({}, opts, $thisBlock.data());
			$.fn.youtubeConnect.initialize($thisBlock, o);
		});
	};

	// plugin defaults
	$.fn.youtubeConnect.defaults = {
		username: 'youtube',
		key: 'AI39si74j-JTeaPRRZYmb3Yj6O3UwJdN3AQOV39rvyAjC8Qjbbihewv1vbGPR4ZnG5n0WUw1EY23mLKcrJ82LFyuwfZDEC7rpw',
		videos: 10
	};


	$.fn.youtubeConnect.initialize = function ($thisBlock, o) {
		var tubeUser = 'https://gdata.youtube.com/feeds/api/users/' + o.username + '?v=2&alt=json&callback=?',
			tubeFeed = 'https://gdata.youtube.com/feeds/api/videos?v=2&author=' + o.username + '&max-results=' + o.videos + '&orderby=published&alt=jsonc&callback=?'

		$.when($.getJSON(tubeUser), $.getJSON(tubeFeed)).done(function (user, feed) {
			if ($('#ytConnectHeader').length != 0) { $.fn.youtubeConnect.buildHeader($thisBlock, user[0], o); }
			if ($('#ytConnectStage').length != 0) { $.fn.youtubeConnect.buildPlayer($thisBlock, feed[0], o); }
			if ($('#ytConnectFeed').length != 0) {
				$.fn.youtubeConnect.buildFeed($thisBlock, feed[0], o);
				$.fn.youtubeConnect.buildEvents[$('#ytConnectStage').length != 0 ? 'shared' : 'modal']($thisBlock, feed[0], o);
			}
		});
	};

	$.fn.youtubeConnect.buildHeader = function ($thisBlock, data, o) {
		var about, exp;
		$thisBlock.find('.profileImage').attr('src', data.entry.media$thumbnail.url);
		$thisBlock.find('.username').attr('href', 'https://www.youtube.com/user/' + data.entry.author[0].name.$t).text(data.entry.author[0].name.$t);
		if (typeof (data.entry.yt$aboutMe) != 'undefined') {
			about = data.entry.yt$aboutMe.$t.replace(/\n\r?/g, '<br />'); // Replace linebreaks with BR
			exp = /(\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
			about = about.replace(exp, "<a href='$1'>$1</a>");
			$thisBlock.find('.summary').html(about);
		}
		if (typeof (data.entry.summary) != 'undefined') {
			about = data.entry.summary.$t.replace(/\n\r?/g, '<br />'); // Replace linebreaks with BR
			exp = /(\b(https?):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
			about = about.replace(exp, "<a href='$1'>$1</a>");
			$thisBlock.find('.summary').html(about);
		}
	};

	$.fn.youtubeConnect.buildFeed = function ($thisBlock, feeddata, o) {
		var template, container, tmp, seconds, views;
		template = $thisBlock.find($('.itemTemplate')).clone().removeClass('itemTemplate');
		container = $thisBlock.find($('.itemTemplate')).parent();
		$thisBlock.find($('.itemTemplate')).remove();
		$.each(feeddata.data.items, function (i, item) {
			tmp = template.clone();
			tmp.find('.title').text(item.title);
			seconds = (parseInt(item.duration) % 60).toString();
			seconds = (seconds.length == 1) ? '0' + seconds : seconds;
			tmp.find('.duration').text(Math.floor(parseInt(item.duration) / 60).toString() + ':' + seconds);
			tmp.find('img').attr('src', item.thumbnail.sqDefault.replace("http", "https"));
			tmp.find('.uploadDate').text($.fn.youtubeConnect.timeAgo(item.updated));
			views = (item.viewCount !== undefined) ? $.fn.youtubeConnect.formatNumber(item.viewCount) + ' views' : '0 views';
			tmp.find('.views').text(views);
			container.append(tmp);
			if (i == o.videos - 1) { return false; }
		});
		$thisBlock.find('#ytConnectFeed .item:first').addClass('active');
	};


	/**
	* Call player function gratefully borrowed from Rob W.
	* @author       Rob W <gwnRob@gmail.com>
	* @website      http://stackoverflow.com/a/7513356/938089
	* @version      20120724
	* @description  Executes function on a framed YouTube video (see website link)
	*               For a full list of possible functions, see:
	*               https://developers.google.com/youtube/js_api_reference
	* @param String frame_id The id of (the div containing) the frame
	* @param String func     Desired function to call, eg. "playVideo"
	*        (Function)      Function to call when the player is ready.
	* @param Array  args     (optional) List of arguments to pass to function func*/
	function callPlayer(frame_id, func, args) {
		if (window.jQuery && frame_id instanceof jQuery) frame_id = frame_id.get(0).id;
		var iframe = document.getElementById(frame_id);
		if (iframe && iframe.tagName.toUpperCase() != 'IFRAME') {
			iframe = iframe.getElementsByTagName('iframe')[0];
		}

		// When the player is not ready yet, add the event to a queue
		// Each frame_id is associated with an own queue.
		// Each queue has three possible states:
		//  undefined = uninitialised / array = queue / 0 = ready
		if (!callPlayer.queue) callPlayer.queue = {};
		var queue = callPlayer.queue[frame_id],
        domReady = document.readyState == 'complete';

		if (domReady && !iframe) {
			// DOM is ready and iframe does not exist. Log a message
			window.console && console.log('callPlayer: Frame not found; id=' + frame_id);
			if (queue) clearInterval(queue.poller);
		} else if (func === 'listening') {
			// Sending the "listener" message to the frame, to request status updates
			if (iframe && iframe.contentWindow) {
				func = '{"event":"listening","id":' + JSON.stringify('' + frame_id) + '}';
				iframe.contentWindow.postMessage(func, '*');
			}
		} else if (!domReady || iframe && (!iframe.contentWindow || queue && !queue.ready)) {
			if (!queue) queue = callPlayer.queue[frame_id] = [];
			queue.push([func, args]);
			if (!('poller' in queue)) {
				// keep polling until the document and frame is ready
				queue.poller = setInterval(function () {
					callPlayer(frame_id, 'listening');
				}, 250);
				// Add a global "message" event listener, to catch status updates:
				messageEvent(1, function runOnceReady(e) {
					var tmp = JSON.parse(e.data);
					if (tmp && tmp.id == frame_id && tmp.event == 'onReady') {
						// YT Player says that they're ready, so mark the player as ready
						clearInterval(queue.poller);
						queue.ready = true;
						messageEvent(0, runOnceReady);
						// .. and release the queue:
						while (tmp = queue.shift()) {
							callPlayer(frame_id, tmp[0], tmp[1]);
						}
					}
				}, false);
			}
		} else if (iframe && iframe.contentWindow) {
			// When a function is supplied, just call it (like "onYouTubePlayerReady")
			if (func.call) return func();
			// Frame exists, send message
			iframe.contentWindow.postMessage(JSON.stringify({
				"event": "command",
				"func": func,
				"args": args || [],
				"id": frame_id
			}), "*");
		}
		/* IE8 does not support addEventListener... */
		function messageEvent(add, listener) {
			var w3 = add ? window.addEventListener : window.removeEventListener;
			w3 ?
            w3('message', listener, !1)
        :
            (add ? window.attachEvent : window.detachEvent)('onmessage', listener);
		}
	}


	$.fn.youtubeConnect.buildPlayer = function ($thisBlock, feeddata, o) {
		$thisBlock.find('#playerTitle').text(feeddata.data.items[0].title);
		var initVid = "http://www.youtube.com/embed/" + feeddata.data.items[0].id + "?enablejsapi=1";
		$.getScript("/client/scripts/jquery.fitvids.min.js").done(function (script, textStatus) {
			$thisBlock.find('#player iframe').eq(0).attr("src", initVid);
			$("#player").fitVids();
		});
	};

	$.fn.youtubeConnect.buildEvents = {
		modal: function ($thisBlock, feeddata, o) {
			$thisBlock.find('.item').each(function (i) {
				$(this).wrap('<a href="' + feeddata.data.items[i].player['default'] + '" data-gal="prettyPhoto[youtubeBadge]" class="itemWrapper" />');
			});
			if (typeof ($.prettyPhoto) == 'undefined') {
				$.getScript("/client/scripts/prettyphoto/js/jquery.prettyPhoto.js").done(function (script, textStatus) {
					$thisBlock.find("a[rel^='prettyPhoto']").prettyPhoto();
				});
			} else {
				$thisBlock.find("a[rel^='prettyPhoto']").prettyPhoto();
			}


		},
		shared: function ($thisBlock, feeddata, o) {
			$thisBlock.find('.item').each(function (i) {
				$(this).click(function () {
					$thisBlock.find('.item').removeClass('active');
					$thisBlock.find('#playerTitle').text(feeddata.data.items[i].title);
					callPlayer("player", "cueVideoById", [feeddata.data.items[i].id]);
					$(this).addClass('active');
				});
			});
		}
	};

	$.fn.youtubeConnect.formatNumber = function (number) {
		var x, x1, x2, rgx;
		number += '';
		x = number.split('.');
		x1 = x[0];
		x2 = x.length > 1 ? '.' + x[1] : '';
		rgx = /(\d+)(\d{3})/;
		while (rgx.test(x1)) {
			x1 = x1.replace(rgx, '$1' + ',' + '$2');
		}
		return x1 + x2;
	};

	$.fn.youtubeConnect.timeAgo = function (dateString) {
		var rightNow, then, diff, second, minute, hour, day, week, months, hours, minutes, month, formattedDate, AMPM;

		rightNow = new Date();
		dateString = dateString.substring(5, 7) + '/' + dateString.substring(8, 10) + '/' + dateString.substring(0, 4) + ' ' + dateString.substring(11, 13) + ':' + dateString.substring(14, 16);
		then = new Date(dateString);

		diff = rightNow - then;

		second = 1000;
		minute = second * 60;
		hour = minute * 60;
		day = hour * 24;
		week = day * 7;

		if (isNaN(diff) || diff < 0) {
			return ""; // return blank string if unknown
		}

		if (diff < second * 2) {
			// within 2 seconds
			return "right now";
		}

		if (diff < minute) {
			return Math.floor(diff / second) + " seconds ago";
		}

		if (diff < minute * 2) {
			return "about 1 minute ago";
		}

		if (diff < hour) {
			return Math.floor(diff / minute) + " minutes ago";
		}

		if (diff < hour * 2) {
			return "about 1 hour ago";
		}

		if (diff < day) {
			return Math.floor(diff / hour) + " hours ago";
		}

		if (diff > day && diff < day * 2) {
			return "yesterday";
		} else {
			months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			hours = (then.getHours() > 12) ? then.getHours() - 11 : then.getHours();
			minutes = (then.getMinutes().toString().length < 2) ? '0' + then.getMinutes().toString() : then.getMinutes();
			month = months[then.getMonth()];
			AMPM = (then.getHours() > 12) ? 'PM' : 'AM';
			if (then.getDate() == '2' || then.getDate() == '22') {
				formattedDate = then.getDate() + 'nd';
			} else if (then.getDate() == '3' || then.getDate() == '23') {
				formattedDate = then.getDate() + 'rd';
			} else if (then.getDate() == '1' || then.getDate() == '21' || then.getDate() == '31') {
				formattedDate = then.getDate() + 'st';
			} else {
				formattedDate = then.getDate() + 'th';
			}
			return hours + ':' + minutes + ' ' + AMPM + ' ' + month + ' ' + formattedDate;
		}
	};

})(jQuery);

$(document).ready(function () {
	$('.ytConnect').youtubeConnect();
});