<?php

App::uses('AppModel', 'Model');
/**
 * Campaign Model
 *
 */
class Campaign extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	public $belongsTo = array('User');

	public $hasOne = array('Category');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'This field is required',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength', 100),
				'message' => 'Must not exceed 100 characters',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
}
