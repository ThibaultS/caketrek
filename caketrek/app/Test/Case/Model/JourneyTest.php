<?php
App::uses('Journey', 'Model');

/**
 * Journey Test Case
 *
 */
class JourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.journey',
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide',
		'app.zone',
		'app.point',
		'app.comment',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_point',
		'app.comments_tourist',
		'app.track',
		'app.comments_track',
		'app.points_track',
		'app.journeys_guide',
		'app.tourists_journey',
		'app.tourists_tourist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Journey = ClassRegistry::init('Journey');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Journey);

		parent::tearDown();
	}

}
