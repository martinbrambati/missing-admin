<?php
class Envio extends AppModel {
	var $name = 'Envio';

	public $actsAs = array('Searchable');



	public $filterArgs = array(
	array('name' => 'chicosperdido_id', 'type' => 'value'),
	array('name' => 'medio_id', 'type' => 'value'),
	array('name' => 'fecha_envio_input', 'type' => 'expression', 'method'=>'getDate','field' => 'Envio.fecha_envio = STR_TO_DATE(?,\'%d-%m-%Y\')')
		
	);

	function getDate($data= array()){
		return $data["fecha_envio_input"];
	}

	public function findByTags($data = array()) {
		$this->Tagged->Behaviors->attach('Containable', array('autoFields' => true));
		$this->Tagged->Behaviors->attach('Searchable');
		$query = $this->Tagged->getQuery('all', array(
				'conditions' => array('Tag.name'  => $data['tags']),
				'fields' => array('foreign_key'),
				'contain' => array('Tag')
		));
		return $query;
	}



	var $validate = array(
		'chicosperdido_id' => array(
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
		'fecha_envio' => array(
			'date' => array(
				'rule' => array('date'),
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
		'Chicosperdido' => array(
			'className' => 'Chicosperdido',
			'foreignKey' => 'chicosperdido_id',
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