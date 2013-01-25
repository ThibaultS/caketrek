<?php
/**
 * TouristsTouristFixture
 *
 */
class TouristsTouristFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'tourist_id_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'tourist_id_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'tourist_confirmed_1' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'tourist_confirmed_2' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'tourist_id_1' => 1,
			'tourist_id_2' => 1,
			'tourist_confirmed_1' => 1,
			'tourist_confirmed_2' => 1
		),
	);

}
