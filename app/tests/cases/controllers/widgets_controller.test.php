<?php
/* Widgets Test cases generated on: 2011-03-24 20:31:31 : 1300995091*/
App::import('Controller', 'Widgets');

class TestWidgetsController extends WidgetsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WidgetsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.widget');

	function startTest() {
		$this->Widgets =& new TestWidgetsController();
		$this->Widgets->constructClasses();
	}

	function endTest() {
		unset($this->Widgets);
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