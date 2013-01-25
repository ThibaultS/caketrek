<?php
App::uses('TouristsTourist', 'Model');

/**
 * TouristsTourist Test Case
 *
 */
class TouristsTouristTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourists_tourist',
		'app.tourist1',
		'app.tourist2'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TouristsTourist = ClassRegistry::init('TouristsTourist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TouristsTourist);

		parent::tearDown();
	}

}
