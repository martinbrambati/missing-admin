<?php
/* Estado Test cases generated on: 2011-03-24 20:31:00 : 1300995060*/
App::import('Model', 'Estado');

class EstadoTestCase extends CakeTestCase {
	var $fixtures = array('app.estado', 'app.chicosperdido', 'app.medio');

	function startTest() {
		$this->Estado =& ClassRegistry::init('Estado');
	}

	function endTest() {
		unset($this->Estado);
		ClassRegistry::flush();
	}

}
?>