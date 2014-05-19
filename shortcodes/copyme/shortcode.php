<?php

// don't load directly
if ( !defined( 'ABSPATH' ) ) {
  die( '-1' );
}

class copyme extends ShortcodeBaseClass {

  static function display( $atts ) {

    $data = shortcode_atts(
      array(
        'param' => '',
      ),
      $atts
    );

    return self::render( $data, __DIR__ );
  }
}