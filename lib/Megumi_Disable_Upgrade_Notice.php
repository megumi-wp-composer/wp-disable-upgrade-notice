<?php

class Megumi_Disable_Upgrade_Notice
{
	public function register()
	{
		remove_action( 'wp_version_check', 'wp_version_check' );
		remove_action( 'admin_init', '_maybe_update_core' );
		add_filter( 'pre_site_transient_update_core', '__return_zero' );
	}
}

$megumi_disable_upgrade_notice = new Megumi_Disable_Upgrade_Notice();
$megumi_disable_upgrade_notice->register();
