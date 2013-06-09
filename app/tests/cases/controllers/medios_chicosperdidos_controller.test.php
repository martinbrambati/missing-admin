<?php
/* MediosChicosperdidos Test cases generated on: 2011-03-26 00:50:16 : 1301097016*/
App::import('Controller', 'MediosChicosperdidos');

class TestMediosChicosperdidosController extends MediosChicosperdidosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MediosChicosperdidosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.medios_chicosperdido', 'app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.chicosperdido', 'app.estado', 'app.destinatario', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->MediosChicosperdidos =& new TestMediosChicosperdidosController();
		$this->MediosChicosperdidos->constructClasses();
	}

	function endTest() {
		unset($this->MediosChicosperdidos);
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