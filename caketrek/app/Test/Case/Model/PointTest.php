<?php
App::uses('Point', 'Model');

/**
 * Point Test Case
 *
 */
class PointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Point = ClassRegistry::init('Point');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Point);

		parent::tearDown();
	}

}
