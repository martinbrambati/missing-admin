<?php
/* Tipofrecuencias Test cases generated on: 2011-03-27 20:04:00 : 1301249040*/
App::import('Controller', 'Tipofrecuencias');

class TestTipofrecuenciasController extends TipofrecuenciasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipofrecuenciasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipofrecuencia', 'app.medio', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Tipofrecuencias =& new TestTipofrecuenciasController();
		$this->Tipofrecuencias->constructClasses();
	}

	function endTest() {
		unset($this->Tipofrecuencias);
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