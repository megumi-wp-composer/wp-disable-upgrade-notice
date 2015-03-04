<?php
namespace Megumi\WP;

class DisableUpgradeNotice {
  public function __construct()
  {

  }
  public function register() {
    remove_action( 'wp_version_check', 'wp_version_check' );
    remove_action( 'admin_init', '_maybe_update_core' );
    add_filter( 'pre_site_transient_update_core', '__return_zero' );
  }
}
