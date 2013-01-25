<?php
App::uses('CommentsTrack', 'Model');

/**
 * CommentsTrack Test Case
 *
 */
class CommentsTrackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_track',
		'app.comment',
		'app.user',
		'app.group',
		'app.guide',
		'app.tourist',
		'app.comments_guide',
		'app.comments_journey',
		'app.journey',
		'app.tourists_journey',
		'app.zone',
		'app.point',
		'app.comments_point',
		'app.track',
		'app.points_track',
		'app.comments_tourist',
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
		$this->CommentsTrack = ClassRegistry::init('CommentsTrack');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsTrack);

		parent::tearDown();
	}

}
