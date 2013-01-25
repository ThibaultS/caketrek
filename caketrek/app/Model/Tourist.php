<?php
App::uses('AppModel', 'Model');
/**
 * Tourist Model
 *
 * @property Guide $Guide
 * @property User $User
 * @property Journey $Journey
 * @property Comment $Comment
 * @property Journey $Journey
 * @property Tourist $Tourist
 */
class Tourist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Guide' => array(
			'className' => 'Guide',
			'foreignKey' => 'tourist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'tourist_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'joinTable' => 'comments_tourists',
			'foreignKey' => 'tourist_id',
			'associationForeignKey' => 'comment_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Journey' => array(
			'className' => 'Journey',
			'joinTable' => 'tourists_journeys',
			'foreignKey' => 'tourist_id',
			'associationForeignKey' => 'journey_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		/*
		'Tourist' => array(
			'className' => 'Tourist',
			'joinTable' => 'tourists_tourists',
			'foreignKey' => 'tourist_id_1',
			'associationForeignKey' => 'tourist_id_2',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)*/
	);

}
