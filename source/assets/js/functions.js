/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./source/_assets/js/scripts/functions.js":
/***/ (function(module, exports) {

// Namespace for older scripts
jQDatatel = {};

// for search: pulls qstring value and dumps to field.

function getQuery(param) {
	var p = escape(unescape(param));
	var regex = new RegExp("[?&]" + p + "(?:=([^&]*))?", "i");
	var match = regex.exec(window.location.search);
	var value = null;
	if (match != null) {
		value = match[1];
	}
	return value;
}

//dom update for tablet and lower views
$(document).ready(function () {

	var breakPoint = 767; //Breakpoint value goes here


	function orderElements() {
		if ($(window).width() > breakPoint) {
			// if bigger than breakpoint
			$('.navPage').insertAfter($('#ctl00_Main_fmPageNav'));
		}
		if ($(window).width() < breakPoint) {
			// if tablet or smaller
			$('#audienceNav').insertBefore($('footer'));
			$('.navPage').insertAfter($('#current'));
		}
	}
	orderElements(); //run immediately
	$(window).resize(orderElements); //run on resize


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
		});
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

/***/ }),

/***/ 3:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./source/_assets/js/scripts/functions.js");


/***/ })

/******/ });