<?php
/* Envio Fixture generated on: 2011-03-26 01:08:31 : 1301098111 */
class EnvioFixture extends CakeTestFixture {
	var $name = 'Envio';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'chicosperdido_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'unique'),
		'medio_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'fecha_envio' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'chicosperdido_id' => array('column' => 'chicosperdido_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'chicosperdido_id' => 1,
			'medio_id' => 1,
			'fecha_envio' => '2011-03-26'
		),
	);
}
?>