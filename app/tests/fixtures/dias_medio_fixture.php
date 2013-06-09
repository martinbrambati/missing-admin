<?php
/* DiasMedio Fixture generated on: 2011-03-24 20:30:53 : 1300995053 */
class DiasMedioFixture extends CakeTestFixture {
	var $name = 'DiasMedio';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'dia_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'medio_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'dia_id' => 1,
			'medio_id' => 1
		),
	);
}
?>