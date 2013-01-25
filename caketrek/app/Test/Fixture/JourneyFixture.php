<?php
/**
 * JourneyFixture
 *
 */
class JourneyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tourist_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'guide_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'zone_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'track_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'tourist_id' => 1,
			'guide_id' => 1,
			'zone_id' => 1,
			'track_id' => 1
		),
	);

}
