<?php
App::uses('AppModel', 'Model');
/**
 * CommentsJourney Model
 *
 * @property Comment $Comment
 * @property Journey $Journey
 */
class CommentsJourney extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'comment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Journey' => array(
			'className' => 'Journey',
			'foreignKey' => 'journey_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
