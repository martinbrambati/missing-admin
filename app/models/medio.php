<?php
class Medio extends AppModel {
	var $name = 'Medio';

	public $actsAs = array('Searchable');



	public $filterArgs = array(
	array('name' => 'name', 'type' => 'like'),
	array('name' => 'tipofrecuencia_id', 'type' => 'value'),
	array('name' => 'cantidad_fotos', 'type' => 'value'),
	array('name' => 'tipofoto_id', 'type' => 'value'),
	array('name' => 'enviadatos', 'type' => 'value'),
	array('name' => 'zona_id', 'type' => 'value')
	);


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
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'tipofrecuencia_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'cantidad_fotos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'tipofoto_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'enviadatos' => array(
			'boolean' => array(
				'rule' => array('boolean'),
	//'message' => 'Your custom message here',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'zona_id' => array(
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
		'Tipofrecuencia' => array(
			'className' => 'Tipofrecuencia',
			'foreignKey' => 'tipofrecuencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		'Tipofoto' => array(
			'className' => 'Tipofoto',
			'foreignKey' => 'tipofoto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		'Zona' => array(
			'className' => 'Zona',
			'foreignKey' => 'zona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			)
			);

			var $hasMany = array(
		'Destinatario' => array(
			'className' => 'Destinatario',
			'foreignKey' => 'medio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			),
		'Envio' => array(
			'className' => 'Envio',
			'foreignKey' => 'medio_id',
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


			var $hasAndBelongsToMany = array(
		'Dia' => array(
			'className' => 'Dia',
			'joinTable' => 'dias_medios',
			'foreignKey' => 'medio_id',
			'associationForeignKey' => 'dia_id',
			'unique' => true,
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
?>