<?php
/* Destinatario Test cases generated on: 2011-03-24 20:30:27 : 1300995027*/
App::import('Model', 'Destinatario');

class DestinatarioTestCase extends CakeTestCase {
	var $fixtures = array('app.destinatario', 'app.medio');

	function startTest() {
		$this->Destinatario =& ClassRegistry::init('Destinatario');
	}

	function endTest() {
		unset($this->Destinatario);
		ClassRegistry::flush();
	}

}
?>