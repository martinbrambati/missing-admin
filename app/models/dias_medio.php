<?php
class DiasMedio extends AppModel {
	var $name = 'DiasMedio';
	var $validate = array(
		'dia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'medio_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Dia' => array(
			'className' => 'Dia',
			'foreignKey' => 'dia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Medio' => array(
			'className' => 'Medio',
			'foreignKey' => 'medio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>