<?php
/**
 * Add the scripts we need on the site in the way the should be included
 * See: http://wp.smashingmagazine.com/2011/10/12/developers-guide-conflict-free-javascript-css-wordpress/
 *
 */
function wp_load_javascript() {

    /*
     * Registers the minified JS
     */
    wp_register_script(
        'wp-minified-js',
        get_template_directory_uri() . '/assets/js/theme.min.js',
        null,
        false,
        true
    );

    // Enable threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    /*
     * Loads our minified JS
     */
    wp_enqueue_script( 'wp-minified-js' );

}
add_action( 'wp_enqueue_scripts', 'wp_load_javascript' );