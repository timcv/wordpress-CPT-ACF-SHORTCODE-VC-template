<?php

// don't load directly
if ( !defined( 'ABSPATH' ) ) {
  die( '-1' );
}

class ShortcodeBaseClass {

  static function render( $data, $dir ) {
    extract( $data );

    ob_start();
    include "$dir/view.php";
    $result = ob_get_contents();
    ob_end_clean();

    return $result;
  }
}