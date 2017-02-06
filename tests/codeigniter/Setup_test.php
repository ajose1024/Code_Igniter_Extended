<?php

class Setup_test extends PHPUnit_Framework_TestCase {

	public function test_bootstrap_constants()
	{
		$this->assertTrue(defined( 'PROJECT_BASE'));
		$this->assertTrue(defined( 'SYS_CORE_PATH'));
		$this->assertTrue(defined( 'APP_DIR_PATH'));
		$this->assertTrue(defined( 'VIEWPATH'));
	}

}