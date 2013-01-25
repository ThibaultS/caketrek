<?php
App::uses('AppModel', 'Model');
/**
 * CommentsTourist Model
 *
 * @property Tourist $Tourist
 * @property Comment $Comment
 */
class CommentsTourist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tourist' => array(
			'className' => 'Tourist',
			'foreignKey' => 'tourist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'comment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
