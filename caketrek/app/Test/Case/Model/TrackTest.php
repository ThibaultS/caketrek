<?php
App::uses('Track', 'Model');

/**
 * Track Test Case
 *
 */
class TrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.track',
		'app.zone',
		'app.guide',
		'app.tourist',
		'app.user',
		'app.group',
		'app.comments_guide',
		'app.comments_journey',
		'app.journey',
		'app.tourists_journey',
		'app.comment',
		'app.point',
		'app.comments_point',
		'app.points_track',
		'app.comments_tourist',
		'app.comments_track',
		'app.tourists_tourist',
		'app.journeys_guide'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Track = ClassRegistry::init('Track');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Track);

		parent::tearDown();
	}

}
