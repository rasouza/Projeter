<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @data void
	 */
	public function testBasicExample()
	{
		$target = new Target();
		$target->importCSV('shipping.csv');
	}

}
