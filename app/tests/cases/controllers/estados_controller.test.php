<?php
/* Estados Test cases generated on: 2011-03-27 20:03:14 : 1301248994*/
App::import('Controller', 'Estados');

class TestEstadosController extends EstadosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EstadosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.estado', 'app.chicosperdido', 'app.envio', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Estados =& new TestEstadosController();
		$this->Estados->constructClasses();
	}

	function endTest() {
		unset($this->Estados);
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