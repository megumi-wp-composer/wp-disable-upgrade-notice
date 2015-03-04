<?php
class SampleTest extends WP_UnitTestCase {
	/**
	 * @test
	 */
	function disable_version_check() {
		$disable_upgrade_notice = new Megumi\WP\DisableUpgradeNotice();
		$disable_upgrade_notice->register();
		
		$this->assertFalse( has_action( 'wp_version_check', 'wp_version_check' ) );
		$this->assertFalse( has_action( 'admin_init', '_maybe_update_core' ) );
		$this->assertSame( 10, has_filter( 'pre_site_transient_update_core', '__return_zero' ) );
	}
}
