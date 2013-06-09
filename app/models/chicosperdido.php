<?php
class Chicosperdido extends AppModel {
	var $name = 'Chicosperdido';
	var $displayField = 'apellidos';
	
	public $actsAs = array('Searchable');



	public $filterArgs = array(
		array('name' => 'nombre_apellido', 'type' => 'like')/*,
		array('name' => 'apellidos', 'type' => 'like'),
		array('name' => 'estado_id', 'type' => 'value')*/
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
		'nombre' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'apellidos' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estado_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Envio' => array(
			'className' => 'Envio',
			'foreignKey' => 'chicosperdido_id',
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

}
?>