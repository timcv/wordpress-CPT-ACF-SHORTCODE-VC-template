<?php

//Deregister visualcomposer front css.
add_action( 'wp_enqueue_scripts', function () {
  wp_deregister_style( 'js_composer_front' );
} );