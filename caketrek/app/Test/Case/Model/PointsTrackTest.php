<?php
App::uses('PointsTrack', 'Model');

/**
 * PointsTrack Test Case
 *
 */
class PointsTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.points_track',
		'app.point',
		'app.zone',
		'app.guide',
		'app.tourist',
		'app.user',
		'app.group',
		'app.comments_guide',
		'app.comments_journey',
		'app.journey',
		'app.tourists_journey',
		'app.track',
		'app.comment',
		'app.comments_point',
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
		$this->PointsTrack = ClassRegistry::init('PointsTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PointsTrack);

		parent::tearDown();
	}

}
