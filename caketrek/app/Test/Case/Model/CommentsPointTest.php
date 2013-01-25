<?php
App::uses('CommentsPoint', 'Model');

/**
 * CommentsPoint Test Case
 *
 */
class CommentsPointTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_point',
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
		$this->CommentsPoint = ClassRegistry::init('CommentsPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsPoint);

		parent::tearDown();
	}

}
