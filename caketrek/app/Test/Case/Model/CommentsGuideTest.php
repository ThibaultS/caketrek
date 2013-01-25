<?php
App::uses('CommentsGuide', 'Model');

/**
 * CommentsGuide Test Case
 *
 */
class CommentsGuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_guide',
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide',
		'app.zone',
		'app.journey',
		'app.tourists_journey',
		'app.track',
		'app.comment',
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
		$this->CommentsGuide = ClassRegistry::init('CommentsGuide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsGuide);

		parent::tearDown();
	}

}
