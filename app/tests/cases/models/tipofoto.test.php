<?php
/* Tipofoto Test cases generated on: 2011-03-24 20:31:19 : 1300995079*/
App::import('Model', 'Tipofoto');

class TipofotoTestCase extends CakeTestCase {
	var $fixtures = array('app.tipofoto', 'app.medio', 'app.tipofrecuencia', 'app.zona', 'app.chicosperdido', 'app.estado', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Tipofoto =& ClassRegistry::init('Tipofoto');
	}

	function endTest() {
		unset($this->Tipofoto);
		ClassRegistry::flush();
	}

}
?>