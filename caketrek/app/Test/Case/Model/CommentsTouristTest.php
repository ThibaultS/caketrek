<?php
App::uses('CommentsTourist', 'Model');

/**
 * CommentsTourist Test Case
 *
 */
class CommentsTouristTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.comments_tourist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommentsTourist = ClassRegistry::init('CommentsTourist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommentsTourist);

		parent::tearDown();
	}

}
