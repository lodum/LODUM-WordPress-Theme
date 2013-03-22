jQuery('document').ready(function() {
	
	jQuery('#search-button').popover({ 
		'html': true,
 	  	'content': '<form class="form" id="popup-search"><div class="input-append"><input type="text" class="span2" name="s" id="s"><button type="submit" class="btn">Search</button></div></form>',
       	'placement': 'left'
	});

	jQuery('#search-button').click(function() {
  		jQuery('#s').focus();
	});

});