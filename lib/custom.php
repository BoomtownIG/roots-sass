<?php
/**
 * Custom functions
 */

// prevent <head> shorttags
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// disable links in comments
remove_filter('comment_text', 'make_clickable', 9);

// remove Hello dolly stuff
remove_action( 'admin_notices', 'hello_dolly' );
remove_action( 'admin_head', 'dolly_css' );
