<?php
/* Envios Test cases generated on: 2011-03-26 01:10:22 : 1301098222*/
App::import('Controller', 'Envios');

class TestEnviosController extends EnviosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EnviosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.envio', 'app.chicosperdido', 'app.estado', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Envios =& new TestEnviosController();
		$this->Envios->constructClasses();
	}

	function endTest() {
		unset($this->Envios);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>