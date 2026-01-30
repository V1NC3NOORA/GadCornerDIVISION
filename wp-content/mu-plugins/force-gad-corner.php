<?php
/**
 * MU plugin: Force-activate gad-corner theme on init.
 * Remove this file after the theme is active.
 */

add_action( 'init', function() {
    if ( ! function_exists( 'wp_get_theme' ) ) {
        return;
    }

    $theme = wp_get_theme();
    $stylesheet = $theme->get_stylesheet();

    if ( $stylesheet !== 'gad-corner' ) {
        if ( function_exists( 'switch_theme' ) ) {
            switch_theme( 'gad-corner' );
        } else {
            update_option( 'template', 'gad-corner' );
            update_option( 'stylesheet', 'gad-corner' );
        }
    }
} );
