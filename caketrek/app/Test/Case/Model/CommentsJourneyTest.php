<?php
App::uses('CommentsJourney', 'Model');

/**
 * CommentsJourney Test Case
 *
 */
class CommentsJourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_journey',
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
		$this->CommentsJourney = ClassRegistry::init('CommentsJourney');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsJourney);

		parent::tearDown();
	}

}
