<?php
/* Medio Fixture generated on: 2011-03-26 01:10:13 : 1301098213 */
class MedioFixture extends CakeTestFixture {
	var $name = 'Medio';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 256, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipofrecuencia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'cantidad_fotos' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'tipofoto_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'enviadatos' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'zona_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name' => array('column' => 'name', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'tipofrecuencia_id' => 1,
			'cantidad_fotos' => 1,
			'tipofoto_id' => 1,
			'enviadatos' => 1,
			'zona_id' => 1
		),
	);
}
?>