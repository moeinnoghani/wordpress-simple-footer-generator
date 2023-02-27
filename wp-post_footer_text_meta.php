<?php

/**
 * Plugin Name: Post Footer Text Using Meta Field
 * Plugin URI: https://github.com/moeinnoghani/wordpress-simple-footer-generator
 * Description: Sends an email notification when an admin user logs in.
 * Version: 1.0
 * Author: Moein Noghani
 * Author URI: https://github.com/moeinnoghani
 */

function post_footer_text_meta( $content ) {
    if ( is_singular( 'post' ) ) {
        $text = get_post_meta( get_the_ID(), 'footer_text', true );
        if ( $text ) {
            $content .= '<p>' . $text . '</p>';
        }
    }
    return $content;
}
add_filter( 'the_content', 'post_footer_text_meta' );