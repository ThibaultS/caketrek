<?php
App::uses('AppModel', 'Model');
/**
 * CommentsPoint Model
 *
 * @property Comment $Comment
 * @property Point $Point
 */
class CommentsPoint extends AppModel {


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
		'Point' => array(
			'className' => 'Point',
			'foreignKey' => 'point_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
