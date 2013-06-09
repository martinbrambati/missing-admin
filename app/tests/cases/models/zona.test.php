<?php
/* Zona Test cases generated on: 2011-03-24 20:31:35 : 1300995095*/
App::import('Model', 'Zona');

class ZonaTestCase extends CakeTestCase {
	var $fixtures = array('app.zona', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.chicosperdido', 'app.estado', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Zona =& ClassRegistry::init('Zona');
	}

	function endTest() {
		unset($this->Zona);
		ClassRegistry::flush();
	}

}
?>