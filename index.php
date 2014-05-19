<?php
/**
 * Load include
 */

foreach ( glob( __DIR__ . "/includes/*.php" ) as $filename ) {
  include $filename;
}

/**
 * Load post types
 */

add_action( 'after_setup_theme', function () {
  if ( defined( 'CUSTOM_CPT_DEVELOPMENT_MODE' ) && CUSTOM_CPT_DEVELOPMENT_MODE !== true ) {
    foreach ( glob( __DIR__ . "/post-types/*.php" ) as $filename ) {
      include $filename;
    }
  }
} );

/**
 * Load fields
 */

add_action( 'after_setup_theme', function () {
  if ( defined( 'CUSTOM_CPT_DEVELOPMENT_MODE' ) && CUSTOM_CPT_DEVELOPMENT_MODE !== true ) {
    foreach ( glob( __DIR__ . "/fields/*.php" ) as $filename ) {
      include $filename;
    }
  }
} );

/**
 * Load shortcodes
 */

add_action( 'after_setup_theme', function () {
  foreach ( glob( __DIR__ . "/shortcodes/*" ) as $sc_dir ) {
    include $sc_dir . '/shortcode.php';
    add_shortcode( basename($sc_dir), array( basename($sc_dir), 'display' ) );
  }
} );

/** Visual Composer mappings **/
add_action( 'init', function () {
  global $pagenow;
  //Only load in admin mode on posts page. Will probably screw up frontend editor.
  if ( function_exists( 'vc_map' ) && is_admin() && $pagenow === 'post.php' || $pagenow === 'admin-ajax.php' || $pagenow === 'post-new.php' ) {
    foreach ( glob( __DIR__ . "/shortcodes/*" ) as $sc_dir ) {
      include $sc_dir . '/vc_map.php';
    }
  }
}, 9 ); //Show our custom shortcodes first in the list