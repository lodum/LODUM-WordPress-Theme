jQuery('document').ready(function() {
	
	jQuery('#search-button').popover();

	jQuery('#search-button').click(function() {
  		jQuery('#s').focus();
	});

});