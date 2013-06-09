<?php
/* Destinatarios Test cases generated on: 2012-05-25 12:52:51 : 1337950371*/
App::import('Controller', 'Destinatarios');

class TestDestinatariosController extends DestinatariosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DestinatariosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.destinatario', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Destinatarios =& new TestDestinatariosController();
		$this->Destinatarios->constructClasses();
	}

	function endTest() {
		unset($this->Destinatarios);
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