<?php
/* Tipofotos Test cases generated on: 2011-03-27 20:04:09 : 1301249049*/
App::import('Controller', 'Tipofotos');

class TestTipofotosController extends TipofotosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TipofotosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.tipofoto', 'app.medio', 'app.tipofrecuencia', 'app.zona', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Tipofotos =& new TestTipofotosController();
		$this->Tipofotos->constructClasses();
	}

	function endTest() {
		unset($this->Tipofotos);
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