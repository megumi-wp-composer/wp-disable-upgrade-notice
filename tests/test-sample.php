<?php
class SampleTest extends WP_UnitTestCase {

	//function testSample() {
	//	// replace this with some actual testing code
	//	$this->assertTrue( true );
	//}
	function test_disable() {
		new Megumi\WP\DisableUpgradeNotice();
	}

	function disable_version_check() {
		$this->assertFalse( has_action( 'wp_version_check', 'wp_version_check' ) );
		$this->assertFalse( has_action( 'admin_init', '_maybe_update_core' ) );
		$this->assertSame( 10, has_filter( 'pre_site_transient_update_core', '__return_zero' ) );
		//$this->assertSame( true, DISALLOW_FILE_EDIT );
	}
}
