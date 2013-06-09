<?php
/* Envio Test cases generated on: 2011-03-26 01:08:31 : 1301098111*/
App::import('Model', 'Envio');

class EnvioTestCase extends CakeTestCase {
	var $fixtures = array('app.envio', 'app.chicosperdido', 'app.estado', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.dia', 'app.dias_medio', 'app.medios_chicosperdido');

	function startTest() {
		$this->Envio =& ClassRegistry::init('Envio');
	}

	function endTest() {
		unset($this->Envio);
		ClassRegistry::flush();
	}

}
?>