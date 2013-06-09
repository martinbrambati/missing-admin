<?php
class InitsController extends AppController {
	var $name ="Inits";
	
	function index(){
		 $user = $this->Auth->user();
	
	    if (!empty($user))
	    {
	        $user = $user[$this->Auth->getModel()->alias];
	    }
	    
	
	    $this->set('voluntario', $user['group_id']==4);
	}

	
	
	
}
?>