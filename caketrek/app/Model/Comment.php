<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property User $User
 * @property Guide $Guide
 * @property Journey $Journey
 * @property Point $Point
 * @property Tourist $Tourist
 * @property Track $Track
 */
class Comment extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Guide' => array(
			'className' => 'Guide',
			'joinTable' => 'comments_guides',
			'foreignKey' => 'comment_id',
			'associationForeignKey' => 'guide_id',
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
			'joinTable' => 'comments_journeys',
			'foreignKey' => 'comment_id',
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
		'Point' => array(
			'className' => 'Point',
			'joinTable' => 'comments_points',
			'foreignKey' => 'comment_id',
			'associationForeignKey' => 'point_id',
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
		'Tourist' => array(
			'className' => 'Tourist',
			'joinTable' => 'comments_tourists',
			'foreignKey' => 'comment_id',
			'associationForeignKey' => 'tourist_id',
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
		'Track' => array(
			'className' => 'Track',
			'joinTable' => 'comments_tracks',
			'foreignKey' => 'comment_id',
			'associationForeignKey' => 'track_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
