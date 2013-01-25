<?php
App::uses('Comment', 'Model');

/**
 * Comment Test Case
 *
 */
class CommentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.comments_track',
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
		$this->Comment = ClassRegistry::init('Comment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comment);

		parent::tearDown();
	}

}
