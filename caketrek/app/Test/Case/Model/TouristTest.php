<?php
App::uses('Tourist', 'Model');

/**
 * Tourist Test Case
 *
 */
class TouristTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide',
		'app.zone',
		'app.journey',
		'app.tourists_journey',
		'app.track',
		'app.comment',
		'app.comments_guide',
		'app.comments_journey',
		'app.point',
		'app.comments_point',
		'app.points_track',
		'app.comments_tourist',
		'app.comments_track',
		'app.journeys_guide',
		'app.tourists_tourist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tourist = ClassRegistry::init('Tourist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tourist);

		parent::tearDown();
	}

}
