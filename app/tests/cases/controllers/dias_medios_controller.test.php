<?php
/* DiasMedios Test cases generated on: 2011-03-24 20:30:54 : 1300995054*/
App::import('Controller', 'DiasMedios');

class TestDiasMediosController extends DiasMediosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DiasMediosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.dias_medio', 'app.dia', 'app.medio');

	function startTest() {
		$this->DiasMedios =& new TestDiasMediosController();
		$this->DiasMedios->constructClasses();
	}

	function endTest() {
		unset($this->DiasMedios);
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