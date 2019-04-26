if (typeof jQDatatel == 'undefined') { jQDatatel = {}; }

jQuery.extend(jQDatatel.flickrGallery = function () {

	var flickrAPI = {};

	flickrAPI.key = $('#flickrGallery').attr('data-key');
	flickrAPI.collection = $('#flickrGallery').attr('data-collection');
	flickrAPI.username = $('#flickrGallery').attr('data-username');
	flickrAPI.findByUsername = 'https://secure.flickr.com/services/rest/?method=flickr.people.findByUsername&jsoncallback=?&api_key=' + flickrAPI.key + '&username=' + flickrAPI.username + '&format=json&callback=?';
	flickrAPI.getTree = 'https://secure.flickr.com/services/rest/?method=flickr.collections.getTree&jsoncallback=?&api_key=' + flickrAPI.key + '&collection_id=' + flickrAPI.collection + '&format=json&callback=?';
	flickrAPI.getPhotos = 'https://secure.flickr.com/services/rest/?method=flickr.photosets.getPhotos&jsoncallback=?&api_key=' + flickrAPI.key + '&extras=url_sq,url_s,url_m,url_o,date_taken&per_page=18&format=json&callback=?';
	flickrAPI.userId = '';

	$('#flickrGallery').empty();
	$('#flickrGallery').addClass('loading');
	jQuery.getJSON(flickrAPI.findByUsername, function (username) {
		flickrAPI.userId = username.user.id;
		jQuery.getJSON(flickrAPI.getTree + '&user_id=' + flickrAPI.userId, function (collectionTree) {
			flickrAPI.collection = {};
			flickrAPI.collection.title = collectionTree.collections.collection[0].title;
			flickrAPI.collection.smIcon = collectionTree.collections.collection[0].iconsmall;
			flickrAPI.collection.lgIcon = collectionTree.collections.collection[0].iconlarge;
			flickrAPI.collection.sets = [];
			flickrAPI.collection.sets = collectionTree.collections.collection[0].set;
			$.each(flickrAPI.collection.sets, function (setIndex, setElement) {
				flickrAPI.collection.sets[setIndex].photos = [];
				$.each(flickrAPI.collection.sets, function (ind, ele) { ele.loaded = false; });
				jQuery.getJSON(flickrAPI.getPhotos + '&photoset_id=' + setElement.id, function (photoData) {
					$.each(photoData.photoset.photo, function (photoIndex, photo) {
						flickrAPI.collection.sets[setIndex].photos.push(photo);
						flickrAPI.collection.sets[setIndex].loaded = true;
						if (photoIndex == photoData.photoset.photo.length - 1) { checkLoadedSets(); }
					});
				});
			});
		});
	});

	function checkLoadedSets() {
		var allLoaded = true;
		$.each(flickrAPI.collection.sets, function (setLoadedIndex, setLoaded) {
			if (allLoaded) {
				allLoaded = setLoaded.loaded;
			}
		});
		if (allLoaded) { drawGallery(); $('#flickrGallery').append($('<div>').attr('id', 'setPhotos')); }
	}

	function drawGallery() {
		$('#flickrGallery').append($('<div>').attr('id', 'setTab'));
		$('#setTab').append($('<div>').attr('id', 'setTabCt'));

		$.each(flickrAPI.collection.sets, function (index, element) {
			$('#setTabCt').append($('<div>').attr({ 'class': 'set', 'id': 'set_' + element.id }));
			$('#set_' + element.id).append($('<img>').attr({ 'alt': element.title, 'src': element.photos[0].url_sq }));

			$('#set_' + element.id).append($('<div>').text(element.title));
			$('#set_' + element.id).append($('<div>').text(element.photos[0].datetaken));
		});
		$('#setTabCt').css('height', $('#setTab').height());
		$('#flickrGallery').removeClass('loading');

		$('.set IMG').bind('click',
			function () {
				closeGalleryDrawer();
				$(this).parent('.set').siblings('.active').removeClass('active');
				$(this).parent('.set').addClass('active');
				loadSet($(this).parent('.set').attr('id'));
			}
		);

	}

	function closeGalleryDrawer() {
		if ($('#setTabCt').css('display') != 'block') {
			$('#setTab').css('position', 'relative');
			$('#setTabCt').slideDown();
			$('#setTab_button').text('Close Tray');
			$('#setTabCt').css('height', $('#setTab').height());
		} else {
			$('#setTabCt').slideUp();
			if ($('#setTab_button').length === 0) {
				$('#setTab').append($('<div>').attr('id', 'setTab_button'));
				$('#setTab_button').bind('click', function () { closeGalleryDrawer(); });
			}
			$('#setTab_button').text('View More Galleries');
		}
	}

	function loadSet(setId, page) {
		page = (page == 'undefined') ? 1 : page;
		id = (parseInt(setId) == setId) ? setId : setId.match(/set_([0-9]+)/)[1];
		jQuery.getJSON(flickrAPI.getPhotos + '&page=' + page + '&photoset_id=' + id,
			function (photoset) {
				$('#setPhotos').empty();
				$('#setPhotos').attr('setId', id);
				$.each(photoset.photoset.photo,
					function (index, element) {
						var photoCell = $('<div>').attr('class', 'photo');
						var photoCellA = $('<a />').attr({ 'rel': 'prettyPhoto[flickr]', 'href': element.url_m, 'id': 'set_a_' + element.id });
						var img = $('<img>').attr({ 'src': element.url_s, 'alt': element.title, 'width': element.width_s, 'height': element.height_s });
						var span = $('<span>').text(element.title);
						photoCell.append(photoCellA);
						photoCellA.append(img);
						photoCell.append(span);
						$('#setPhotos').append(photoCell);
					}
				);
				if (photoset.photoset.pages > 1) {
					drawPages(photoset.photoset.page, photoset.photoset.pages);
				}
				$("a[rel^='prettyPhoto']").prettyPhoto({ theme: 'light_rounded' });
			}
		);

	}

	function drawPages(currentPage, pages) {
		$('#setPhotos').append($('<div>').attr('id', 'pager'));
		prev = $('<div>').attr({ 'class': 'page prev', 'page': parseInt(currentPage) - 1 }).text('< prev');
		if (currentPage == 1) { prev.addClass('disabled'); }
		$('#pager').append(prev);
		for (i = 1; i <= pages; i++) {
			if (pages <= 10) {
				var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
				if (i == currentPage) { page.addClass('current'); }
				$('#pager').append(page);
			} else if (currentPage <= 8) {
				if (i <= 11) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
					if (i == currentPage) { page.addClass('current'); }
				} else if (i == 12) {
					var page = $('<div>').attr({ 'class': 'elipsis' }).text('...');
				} else if (i == pages - 1 || i == pages) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
				}
				$('#pager').append(page);
			} else if (currentPage > 8 && currentPage < pages - 9) {
				if (i == 1 || i == 2 || i == currentPage || (i >= parseInt(currentPage) - 3 && i <= parseInt(currentPage) + 3)) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
					if (i == currentPage) { page.addClass('current'); }
				} else if (i == 3 || i == parseInt(currentPage) + 4) {
					var page = $('<div>').attr({ 'class': 'elipsis' }).text('...');
				} else if (i == pages - 1 || i == pages) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
				}
				$('#pager').append(page);
			} else if (parseInt(currentPage) >= pages - 9) {
				if (i == 1 || i == 2) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
				} else if (i == 3) {
					var page = $('<div>').attr({ 'class': 'elipsis' }).text('...');
				} else if (pages - parseInt(currentPage) < 6 && pages - i < 6) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
					if (i == currentPage) { page.addClass('current'); }
				} else if (i >= parseInt(currentPage) - 3) {
					var page = $('<div>').attr({ 'class': 'page', 'page': i }).text(i);
					if (i == currentPage) { page.addClass('current'); }
				}
				$('#pager').append(page);
			}
		}
		next = $('<div>').attr({ 'class': 'page next', 'page': parseInt(currentPage) + 1 }).text('next >');
		if (currentPage == pages) { next.addClass('disabled'); }
		$('#pager').append(next);
		$('#pager div[class~="page"]').bind('click', function () { loadSet($('#setPhotos').attr('setId'), $(this).attr('page')); });
		$('#pager div[class~="disabled"]').unbind('click');
		$('#pager div[class~="current"]').unbind('click');
	}
});
$(document).ready(function () {
	jQDatatel.flickrGallery();
});