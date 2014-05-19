<?php

if ( !defined( 'WPB_VC_VERSION' ) ) {
  add_action( 'admin_notices', 'vc_extend_notice' );
  return;
}

function vc_extend_notice() {
  $plugin_data = get_plugin_data( __FILE__ );
  echo '
<div class="updated">
  <p>' . sprintf( __( '<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend' ), $plugin_data['Name'] ) . '</p>
</div>';
}