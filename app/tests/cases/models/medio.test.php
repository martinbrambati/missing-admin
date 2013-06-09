<?php
/* Medio Test cases generated on: 2011-03-26 01:10:13 : 1301098213*/
App::import('Model', 'Medio');

class MedioTestCase extends CakeTestCase {
	var $fixtures = array('app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Medio =& ClassRegistry::init('Medio');
	}

	function endTest() {
		unset($this->Medio);
		ClassRegistry::flush();
	}

}
?>