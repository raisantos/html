<?php

	function foodpark_footer_credits() {
		printf( '<p>%1$s<a href="%2$s">%3$s</a>', __( 'Powered by ','foodpark'), esc_url( __( 'http://wordpress.org/', 'foodpark' ) ), __( 'WordPress', 'foodpark' ) ); ?>
		<span class="sep"> .</span>
		<?php printf( __( 'Theme: %1$s by %2$s', 'foodpark' ), 'FoodPark', '<a href="http://www.webulousthemes.com/" rel="designer">Webulous Themes</a></p>' );
	}
	
	add_action('foodpark_credits','foodpark_footer_credits');  