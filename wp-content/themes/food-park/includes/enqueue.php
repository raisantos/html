<?php 

/**
 * Enqueue scripts and styles.
 */
function foodpark_scripts() {
	wp_enqueue_style( 'foodpark-font-Lato', foodpark_theme_font_url('Lato:400,700'), array(), 20150515 );
	wp_enqueue_style( 'foodpark-font-Pacifico', foodpark_theme_font_url('Pacifico'), array(), 20150515 );

	wp_enqueue_style( 'foodpark-flex', get_template_directory_uri() . '/css/flexslider.css', array(), 20150515  );
	wp_enqueue_style( 'foodpark-fa', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0', 'all' );
	wp_enqueue_style( 'foodpark-style', get_stylesheet_uri() );

	wp_enqueue_script( 'foodpark-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'foodpark-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'foodpark-flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), '2.4.0', true );
	wp_enqueue_script( 'foodpark-imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', true );
	wp_enqueue_script( 'masonry');
	wp_enqueue_script( 'foodpark-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'foodpark_scripts' );

/**
 * Register Google fonts.
 *
 * @return string
 */
function foodpark_theme_font_url($font) {
	$font_url = '';
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Font, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Font: on or off', 'foodpark' ) ) {
		$font_url = esc_url( add_query_arg( 'family', urlencode($font), "//fonts.googleapis.com/css" ) );
	}

	return $font_url;
}

function foodpark_admin_enqueue_scripts( $hook ) {
	if( strpos( $hook, 'wbls_upgrade') ) {
		wp_enqueue_style( 
			'foodpark-fa', 
			get_template_directory_uri() . '/css/font-awesome.min.css', 
			array(), 
			'4.3.0', 
			'all' 
		);
		wp_enqueue_style( 
			'foodpark-admin-css', 
			get_template_directory_uri() . '/admin/css/admin.css', 
			array(), 
			'1.0.0', 
			'all' 
		);
	}
}
add_action( 'admin_enqueue_scripts', 'foodpark_admin_enqueue_scripts' );