jQuery(document).ready(function($) {

	function offsetSpacerHeight() {
		$('.offset-spacer').each(function(index, obj) {
			$(this).height($(this).parent().parent().parent().prev('.et_pb_column').height()/2);
		});
	}
	
	function offsetRowHeight() {
		$('.offset-blocks-container .et_pb_row').each(function (index, obj) {
			$(this).height($(this).children('.total-column-height').height());
		});
	}
	
	/*
	$(document).ready(function () {
		offsetSpacerHeight();
		offsetRowHeight();
	});
	*/
	
	$(window).load(function () {
		offsetSpacerHeight();
		offsetRowHeight();
	});
	
	$(window).resize(function () {
		offsetSpacerHeight();
		offsetRowHeight();
	});

});