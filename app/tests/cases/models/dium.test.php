<?php
/* Dium Test cases generated on: 2011-03-27 20:04:56 : 1301249096*/
App::import('Model', 'Dium');

class DiumTestCase extends CakeTestCase {
	function startTest() {
		$this->Dium =& ClassRegistry::init('Dium');
	}

	function endTest() {
		unset($this->Dium);
		ClassRegistry::flush();
	}

}
?>