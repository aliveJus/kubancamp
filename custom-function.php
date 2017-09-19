<?php
	// Loads child theme textdomain
	load_child_theme_textdomain( CURRENT_THEME, CHILD_DIR . '/languages' );

	// Loads custom scripts.
	require_once( 'custom-js.php' );
	require_once( 'shortcodes/service-box.php' );
	require_once( 'shortcodes/post-cycle.php' );
	require_once( 'shortcodes/banner.php' );

	add_filter( 'cherry_stickmenu_selector', 'cherry_change_selector' );
	function cherry_change_selector($selector) {
		$selector = 'header .nav-wrap';
		return $selector;
	}
?>