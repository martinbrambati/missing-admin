<?php
/* Tipofrecuencium Test cases generated on: 2011-03-27 20:03:58 : 1301249038*/
App::import('Model', 'Tipofrecuencium');

class TipofrecuenciumTestCase extends CakeTestCase {
	function startTest() {
		$this->Tipofrecuencium =& ClassRegistry::init('Tipofrecuencium');
	}

	function endTest() {
		unset($this->Tipofrecuencium);
		ClassRegistry::flush();
	}

}
?>