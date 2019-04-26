if (typeof jQDatatel == "undefined") { jQDatatel = {} } jQuery.extend(jQDatatel.flickrGallery = function () { function t() { var t = true; $.each(e.collection.sets, function (e, n) { if (t) { t = n.loaded } }); if (t) { n(); $("#flickrGallery").append($("<div>").attr("id", "setPhotos")) } } function n() { $("#flickrGallery").append($("<div>").attr("id", "setTab")); $("#setTab").append($("<div>").attr("id", "setTabCt")); $.each(e.collection.sets, function (e, t) { $("#setTabCt").append($("<div>").attr({ "class": "set", id: "set_" + t.id })); $("#set_" + t.id).append($("<img>").attr({ alt: t.title, src: t.photos[0].url_sq })); $("#set_" + t.id).append($("<div>").text(t.title)); $("#set_" + t.id).append($("<div>").text(t.photos[0].datetaken)) }); $("#setTabCt").css("height", $("#setTab").height()); $("#flickrGallery").removeClass("loading"); $(".set IMG").bind("click", function () { r(); $(this).parent(".set").siblings(".active").removeClass("active"); $(this).parent(".set").addClass("active"); s($(this).parent(".set").attr("id")) }) } function r() { if ($("#setTabCt").css("display") != "block") { $("#setTab").css("position", "relative"); $("#setTabCt").slideDown(); $("#setTab_button").text("Close Tray"); $("#setTabCt").css("height", $("#setTab").height()) } else { $("#setTabCt").slideUp(); if ($("#setTab_button").length === 0) { $("#setTab").append($("<div>").attr("id", "setTab_button")); $("#setTab_button").bind("click", function () { r() }) } $("#setTab_button").text("View More Galleries") } } function s(t, n) { n = n == "undefined" ? 1 : n; id = parseInt(t) == t ? t : t.match(/set_([0-9]+)/)[1]; jQuery.getJSON(e.getPhotos + "&page=" + n + "&photoset_id=" + id, function (e) { $("#setPhotos").empty(); $("#setPhotos").attr("setId", id); $.each(e.photoset.photo, function (e, t) { var n = $("<div>").attr("class", "photo"); var r = $("<a />").attr({ rel: "prettyPhoto[flickr]", href: t.url_m, id: "set_a_" + t.id }); var i = $("<img>").attr({ src: t.url_s, alt: t.title, width: t.width_s, height: t.height_s }); var s = $("<span>").text(t.title); n.append(r); r.append(i); n.append(s); $("#setPhotos").append(n) }); if (e.photoset.pages > 1) { o(e.photoset.page, e.photoset.pages) } $("a[rel^='prettyPhoto']").prettyPhoto({ theme: "light_rounded" }) }) } function o(e, t) { $("#setPhotos").append($("<div>").attr("id", "pager")); prev = $("<div>").attr({ "class": "page prev", page: parseInt(e) - 1 }).text("< prev"); if (e == 1) { prev.addClass("disabled") } $("#pager").append(prev); for (i = 1; i <= t; i++) { if (t <= 10) { var n = $("<div>").attr({ "class": "page", page: i }).text(i); if (i == e) { n.addClass("current") } $("#pager").append(n) } else if (e <= 8) { if (i <= 11) { var n = $("<div>").attr({ "class": "page", page: i }).text(i); if (i == e) { n.addClass("current") } } else if (i == 12) { var n = $("<div>").attr({ "class": "elipsis" }).text("...") } else if (i == t - 1 || i == t) { var n = $("<div>").attr({ "class": "page", page: i }).text(i) } $("#pager").append(n) } else if (e > 8 && e < t - 9) { if (i == 1 || i == 2 || i == e || i >= parseInt(e) - 3 && i <= parseInt(e) + 3) { var n = $("<div>").attr({ "class": "page", page: i }).text(i); if (i == e) { n.addClass("current") } } else if (i == 3 || i == parseInt(e) + 4) { var n = $("<div>").attr({ "class": "elipsis" }).text("...") } else if (i == t - 1 || i == t) { var n = $("<div>").attr({ "class": "page", page: i }).text(i) } $("#pager").append(n) } else if (parseInt(e) >= t - 9) { if (i == 1 || i == 2) { var n = $("<div>").attr({ "class": "page", page: i }).text(i) } else if (i == 3) { var n = $("<div>").attr({ "class": "elipsis" }).text("...") } else if (t - parseInt(e) < 6 && t - i < 6) { var n = $("<div>").attr({ "class": "page", page: i }).text(i); if (i == e) { n.addClass("current") } } else if (i >= parseInt(e) - 3) { var n = $("<div>").attr({ "class": "page", page: i }).text(i); if (i == e) { n.addClass("current") } } $("#pager").append(n) } } next = $("<div>").attr({ "class": "page next", page: parseInt(e) + 1 }).text("next >"); if (e == t) { next.addClass("disabled") } $("#pager").append(next); $('#pager div[class~="page"]').bind("click", function () { s($("#setPhotos").attr("setId"), $(this).attr("page")) }); $('#pager div[class~="disabled"]').unbind("click"); $('#pager div[class~="current"]').unbind("click") } var e = {}; e.key = $("#flickrGallery").attr("data-key"); e.collection = $("#flickrGallery").attr("data-collection"); e.username = $("#flickrGallery").attr("data-username"); e.findByUsername = "https://secure.flickr.com/services/rest/?method=flickr.people.findByUsername&jsoncallback=?&api_key=" + e.key + "&username=" + e.username + "&format=json&callback=?"; e.getTree = "https://secure.flickr.com/services/rest/?method=flickr.collections.getTree&jsoncallback=?&api_key=" + e.key + "&collection_id=" + e.collection + "&format=json&callback=?"; e.getPhotos = "https://secure.flickr.com/services/rest/?method=flickr.photosets.getPhotos&jsoncallback=?&api_key=" + e.key + "&extras=url_sq,url_s,url_m,url_o,date_taken&per_page=18&format=json&callback=?"; e.userId = ""; $("#flickrGallery").empty(); $("#flickrGallery").addClass("loading"); jQuery.getJSON(e.findByUsername, function (n) { e.userId = n.user.id; jQuery.getJSON(e.getTree + "&user_id=" + e.userId, function (n) { e.collection = {}; e.collection.title = n.collections.collection[0].title; e.collection.smIcon = n.collections.collection[0].iconsmall; e.collection.lgIcon = n.collections.collection[0].iconlarge; e.collection.sets = []; e.collection.sets = n.collections.collection[0].set; $.each(e.collection.sets, function (n, r) { e.collection.sets[n].photos = []; $.each(e.collection.sets, function (e, t) { t.loaded = false }); jQuery.getJSON(e.getPhotos + "&photoset_id=" + r.id, function (r) { $.each(r.photoset.photo, function (i, s) { e.collection.sets[n].photos.push(s); e.collection.sets[n].loaded = true; if (i == r.photoset.photo.length - 1) { t() } }) }) }) }) }) }); $(document).ready(function () { jQDatatel.flickrGallery() })