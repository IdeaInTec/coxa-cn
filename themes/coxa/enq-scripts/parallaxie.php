<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_script('paral-js', get_template_directory_uri() . '/assets/js/parallaxie.js', array('jquery'), '1.0.0', true);
?>