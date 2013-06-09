<?php
/* MediosChicosperdido Test cases generated on: 2011-03-26 00:50:14 : 1301097014*/
App::import('Model', 'MediosChicosperdido');

class MediosChicosperdidoTestCase extends CakeTestCase {
	var $fixtures = array('app.medios_chicosperdido', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.chicosperdido', 'app.estado', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->MediosChicosperdido =& ClassRegistry::init('MediosChicosperdido');
	}

	function endTest() {
		unset($this->MediosChicosperdido);
		ClassRegistry::flush();
	}

}
?>