<?php
App::uses('Guide', 'Model');

/**
 * Guide Test Case
 *
 */
class GuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guide',
		'app.tourist',
		'app.user',
		'app.group',
		'app.comments_guide',
		'app.comments_journey',
		'app.journey',
		'app.tourists_journey',
		'app.zone',
		'app.point',
		'app.comment',
		'app.comments_point',
		'app.comments_tourist',
		'app.track',
		'app.comments_track',
		'app.points_track',
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
		$this->Guide = ClassRegistry::init('Guide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guide);

		parent::tearDown();
	}

}
