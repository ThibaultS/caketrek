<?php
App::uses('JourneysGuide', 'Model');

/**
 * JourneysGuide Test Case
 *
 */
class JourneysGuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.journeys_guide',
		'app.journey',
		'app.tourist',
		'app.user',
		'app.group',
		'app.guide',
		'app.zone',
		'app.point',
		'app.comment',
		'app.comments_guide',
		'app.comments_journey',
		'app.comments_point',
		'app.comments_tourist',
		'app.track',
		'app.comments_track',
		'app.points_track',
		'app.tourists_journey',
		'app.tourists_tourist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->JourneysGuide = ClassRegistry::init('JourneysGuide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->JourneysGuide);

		parent::tearDown();
	}

}
