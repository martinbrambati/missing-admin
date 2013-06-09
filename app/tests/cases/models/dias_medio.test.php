<?php
/* DiasMedio Test cases generated on: 2011-03-24 20:30:53 : 1300995053*/
App::import('Model', 'DiasMedio');

class DiasMedioTestCase extends CakeTestCase {
	var $fixtures = array('app.dias_medio', 'app.dia', 'app.medio');

	function startTest() {
		$this->DiasMedio =& ClassRegistry::init('DiasMedio');
	}

	function endTest() {
		unset($this->DiasMedio);
		ClassRegistry::flush();
	}

}
?>