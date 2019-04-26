(function ($) {
	$.fn.associateCheckboxes = function (options) {
		// build main options before element iteration
		var opts = $.extend({}, $.fn.associateCheckboxes.defaults, options);
		// iterate and reformat each matched element
		return this.each(function () {
			$checkset = $(this);
			// build element specific options
			var o = $.extend({}, opts, $checkset.data());

			//initialize functions
			$.fn.associateCheckboxes.initialize($checkset, o);
		});
	};

	// plugin defaults
	$.fn.associateCheckboxes.defaults = {

};

// Initializer:  sets click events, etc
$.fn.associateCheckboxes.initialize = function (checkset, o) {
	checkset.click(function () {
		$.fn.associateCheckboxes.toggle(this, o);
	});
};

// Initializer:  sets click events, etc
$.fn.associateCheckboxes.toggle = function (checkset, o) {
	checksetID = $(checkset).data("checksetmaster");
	bChecked = $(checkset).attr("checked");
	if (bChecked == 'checked') {
		$('[data-checkset=' + checksetID + ']').attr('checked', 'checked').change();
	} else {
		$('[data-checkset=' + checksetID + ']').removeAttr('checked').change();
	}
};


})(jQuery);

(function ($) {
	$.fn.listFilter = function (options) {
		// build main options before element iteration
		var opts = $.extend({}, $.fn.listFilter.defaults, options);
		// iterate and reformat each matched element
		return this.each(function () {
			$filter = $(this);
			// build element specific options
			// var o = $.metadata ? $.extend({}, opts, $filter.metadata({ type: 'html5' })) : opts;
			var o = $.extend({}, opts, $filter.data());

			//initialize functions
			$.fn.listFilter.initialize($filter, o);
		});
	};

	// plugin defaults
	$.fn.listFilter.defaults = {
		filteroperation: 'or',
		inputclass: '',
		containerselector: '',
		itemselector: '',
		emptyselector: ''
	};

	// Initializer:  sets click events, etc
	$.fn.listFilter.initialize = function (filter, o) {
		$(o.emptyselector).hide();
		var inputRef = (o.inputclass != '') ? "input." + o.inputclass : "input";
		filter.find(inputRef).each(function () {
			$(this).bind('change.listfilter', function () {
				
				$.fn.listFilter.filterBy[o.filteroperation](filter, this, o);
			});
		});
		
		$.fn.listFilter.filterBy[o.filteroperation](filter, filter.find(inputRef).eq(0), o);
	};



	$.fn.listFilter.filterBy = {
		or: function (filter, criteria, o) {
			listToFilter = o.filterfor;
			inputRef = (o.inputclass != '') ? "input." + o.inputclass : "input"
			$('#' + listToFilter + ' [data-tag*="' + $(criteria).attr('value') + '"]').hide();

			$.each(filter.find(inputRef + ':checked'), function () {
				$('#' + listToFilter + ' [data-tag*="' + $(this).attr('value') + '"]').show();
			});
			$.fn.listFilter.cleanup(filter, o);
		},
		exclusive: function (filter, criteria, o) {
			listToFilter = o.filterfor;
			inputRef = (o.inputclass != '') ? "input." + o.inputclass : "input"
			$('#' + listToFilter + ' [data-tag]').hide();

			$.each(filter.find(inputRef + ':checked'), function () {
				if ($(this).attr('value') == 'all') {
					$('#' + listToFilter + ' [data-tag]').show();
				} else {
					$('#' + listToFilter + ' [data-tag*="' + $(this).attr('value') + '"]').show();
				}
			});

			if (filter.find(inputRef + ':checked').length <= 0) {
				$('#' + listToFilter + ' [data-tag]').show();
			}
			$.fn.listFilter.cleanup(filter, o);
		}
	};

	$.fn.listFilter.cleanup = function (filter, o) {
		listToFilter = o.filterfor;
		
		
		$.each($('#' + listToFilter).find(o.containerselector),
			function () {

				if ($(this).find(o.itemselector).filter(function () { return !($(this).css('display') == 'none'); }).length == 0) {

					$(this).hide();
				} else {
					$(this).show();
				}
			}
		);
		if ($('#' + listToFilter).find(o.containerselector + ':visible').length == 0) {
			$(o.emptyselector).show();
		} else {
			$(o.emptyselector).hide();
		}
		
	}

})(jQuery);

$(function () {
	$('[data-checksetmaster]').associateCheckboxes();
	$('[data-filterfor]').listFilter();
});