<?php
/* Dias Test cases generated on: 2011-03-27 20:04:56 : 1301249096*/
App::import('Controller', 'Dias');

class TestDiasController extends DiasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DiasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dia', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dias_medio');

	function startTest() {
		$this->Dias =& new TestDiasController();
		$this->Dias->constructClasses();
	}

	function endTest() {
		unset($this->Dias);
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