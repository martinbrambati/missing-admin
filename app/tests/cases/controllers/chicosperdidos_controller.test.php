<?php
/* Chicosperdidos Test cases generated on: 2012-05-25 11:43:23 : 1337946203*/
App::import('Controller', 'Chicosperdidos');

class TestChicosperdidosController extends ChicosperdidosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ChicosperdidosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.chicosperdido', 'app.estado', 'app.envio', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Chicosperdidos =& new TestChicosperdidosController();
		$this->Chicosperdidos->constructClasses();
	}

	function endTest() {
		unset($this->Chicosperdidos);
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