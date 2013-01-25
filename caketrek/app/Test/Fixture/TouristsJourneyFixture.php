<?php
/**
 * TouristsJourneyFixture
 *
 */
class TouristsJourneyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'tourist_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'journey_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'tourist_confirmed' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'journey_confirmed' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tourist_id' => 1,
			'journey_id' => 1,
			'tourist_confirmed' => 1,
			'journey_confirmed' => 1
		),
	);

}
