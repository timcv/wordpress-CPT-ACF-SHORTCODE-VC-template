<?php

/**
 * Class BootstrapVisualComposer
 *
 * Customizations for Visual Composer in this theme
 *
 */

add_filter( 'vc_shortcodes_css_class', function ( $class_string, $tag ) {
  if ( $tag == 'vc_row' || $tag == 'vc_row_inner' ) {
    $class_string = str_replace( 'vc_row-fluid', 'row', $class_string );
  }
  if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
    $class_string = preg_replace( '/vc_span(\d{1,2})/', 'col-xs-$1', $class_string );
  }

  return $class_string;
}, 10, 2 );