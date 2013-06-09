<?php
/* MediosChicosperdido Fixture generated on: 2011-03-26 00:50:14 : 1301097014 */
class MediosChicosperdidoFixture extends CakeTestFixture {
	var $name = 'MediosChicosperdido';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'medio_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'chicosperdido_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'medio_id' => 1,
			'chicosperdido_id' => 1
		),
	);
}
?>