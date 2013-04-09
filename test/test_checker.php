<?php

	require_once(dirname(dirname(__FILE__))."/src/checker.php");

	class CheckerTest extends PHPUnit_Framework_TestCase
	{
		public function testThatTrueIsTrue()
		{
			$this->assertEquals(true, true);
		}
	}


?>
