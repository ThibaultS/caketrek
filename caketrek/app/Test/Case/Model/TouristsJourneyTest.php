<?php
App::uses('TouristsJourney', 'Model');

/**
 * TouristsJourney Test Case
 *
 */
class TouristsJourneyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourists_journey',
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide',
		'app.zone',
		'app.journey',
		'app.track',
		'app.comment',
		'app.comments_guide',
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
		$this->TouristsJourney = ClassRegistry::init('TouristsJourney');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TouristsJourney);

		parent::tearDown();
	}

}
