( function( $ ) {
	// Add Make Plus message
		upgrade = $('<a class="foodpark-buy-pro"></a>')
			.attr('href', 'http://www.webulousthemes.com/?add-to-cart=1530')
			.attr('target', '_blank')
			.text(foodpark_upgrade.message)
		;
		$('.preview-notice').append(upgrade);
		// Remove accordion click event
		$('.foodpark-buy-pro').on('click', function(e) {
			e.stopPropagation();
		});
} )( jQuery );