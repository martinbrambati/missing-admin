<?php
/* Zonas Test cases generated on: 2011-03-27 20:03:34 : 1301249014*/
App::import('Controller', 'Zonas');

class TestZonasController extends ZonasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ZonasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.zona', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Zonas =& new TestZonasController();
		$this->Zonas->constructClasses();
	}

	function endTest() {
		unset($this->Zonas);
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