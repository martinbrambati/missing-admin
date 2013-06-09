<?php
/* Medios Test cases generated on: 2011-03-26 01:10:14 : 1301098214*/
App::import('Controller', 'Medios');

class TestMediosController extends MediosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MediosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.medio', 'app.tipofrecuencia', 'app.tipofoto', 'app.zona', 'app.destinatario', 'app.envio', 'app.chicosperdido', 'app.estado', 'app.dia', 'app.dias_medio');

	function startTest() {
		$this->Medios =& new TestMediosController();
		$this->Medios->constructClasses();
	}

	function endTest() {
		unset($this->Medios);
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