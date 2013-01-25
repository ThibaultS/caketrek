<?php
App::uses('AppModel', 'Model');
/**
 * TouristsTourist Model
 *
 * @property Tourist1 $Tourist1
 * @property Tourist2 $Tourist2
 */
class TouristsTourist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tourist1' => array(
			'className' => 'Tourist1',
			'foreignKey' => 'tourist_id_1',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tourist2' => array(
			'className' => 'Tourist2',
			'foreignKey' => 'tourist_id_2',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
