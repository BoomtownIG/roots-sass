<?php
/**
 * Custom functions
 */

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_filter('comment_text', 'make_clickable', 9);
