<?php
class EnviosController extends AppController {

	var $name = 'Envios';


	public $components = array('Prg');

	public $presetVars = array(
	array('field' => 'chicosperdido_id', 'type' => 'value'),
	array('field' => 'fecha_envio_input', 'type' => 'value'),
	array('field' => 'medio_id', 'type' => 'value')
	);

	public function find() {
			
		$this->Prg->commonProcess();
			
		$this->paginate['conditions'] = $this->Envio->parseCriteria($this->passedArgs);
		$this->set('envios', $this->paginate());
			
		$chicosperdidos = $this->Envio->Chicosperdido->query('SELECT `id`,`apellidos` FROM `chicosperdidos`  WHERE estado_id = 1 order by apellidos desc');
		foreach ($chicosperdidos as $key=>$val){
			$chicosperdidos2[$val["chicosperdidos"]["id"]] =  $val["chicosperdidos"]["apellidos"];
		}
		$chicosperdidos = $chicosperdidos2;
			
		if(!$this->data || !array_key_exists("chicosperdido_id",$this->data ["Envio"])){
			$this->data["Envio"]["chicosperdido_id"] = null;

		}
			
		if(!$this->data || !array_key_exists("medio_id",$this->data ["Envio"])){
			$this->data["Envio"]["medio_id"] = null;
		}
			
			
		$medios = $this->Envio->Medio->find('list');
		$this->set(compact('chicosperdidos', 'medios'));
		
		 $user = $this->Auth->user();
	
	    if (!empty($user))
	    {
	        $user = $user[$this->Auth->getModel()->alias];
	    }
	    
	
	    $this->set('voluntario', $user['group_id']==4);
	    
	}


	function index() {
		$this->Envio->recursive = 0;
		$this->set('envios', $this->paginate());
		 $user = $this->Auth->user();
	
	    if (!empty($user))
	    {
	        $user = $user[$this->Auth->getModel()->alias];
	    }
	    
	
	    $this->set('voluntario', $user['group_id']==4);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid envio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('envio', $this->Envio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Envio->create();
			if ($this->Envio->save($this->data)) {
				$this->Session->setFlash(__('The envio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envio could not be saved. Please, try again.', true));
			}
		}
		$chicosperdidos = $this->Envio->Chicosperdido->find('list');
		$medios = $this->Envio->Medio->find('list');
		$this->set(compact('chicosperdidos', 'medios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid envio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Envio->save($this->data)) {
				$this->Session->setFlash(__('The envio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The envio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Envio->read(null, $id);
		}
		$chicosperdidos = $this->Envio->Chicosperdido->find('list');
		$medios = $this->Envio->Medio->find('list');
		$this->set(compact('chicosperdidos', 'medios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for envio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Envio->delete($id)) {
			$this->Session->setFlash(__('Envio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Envio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>