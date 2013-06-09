<?php
class ChicosperdidosController extends AppController {

	var $name = 'Chicosperdidos';
	public $components = array('Prg');

	public $presetVars = array(
	array('filed' => 'nombre_apellido', 'type' => 'like')/*,
	array('field' => 'apellidos', 'type' => 'like'),
	array('field' => 'estado_id', 'type' => 'value')*/
	);

	public function find() {
			
		$this->Prg->commonProcess();
			
		$this->paginate['conditions'] = $this->Chicosperdido->parseCriteria($this->passedArgs);
		$this->set('chicosperdidos', $this->paginate());
		
		if(!$this->data || !array_key_exists("estado_id",$this->data ["Chicosperdido"])){
			$this->data["Chicosperdido"]["estado_id"] = null;
		}
		
		
		$estados = $this->Chicosperdido->Estado->find('list');
		$this->set(compact('estados'));

	}

	function index() {
		$this->Chicosperdido->recursive = 0;
		$this->set('chicosperdidos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid chicosperdido', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('chicosperdido', $this->Chicosperdido->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Chicosperdido->create();
			if ($this->Chicosperdido->save($this->data)) {
				$this->Session->setFlash(__('The chicosperdido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chicosperdido could not be saved. Please, try again.', true));
			}
		}
		$estados = $this->Chicosperdido->Estado->find('list');
		$this->set(compact('estados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid chicosperdido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Chicosperdido->save($this->data)) {
				$this->Session->setFlash(__('The chicosperdido has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The chicosperdido could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Chicosperdido->read(null, $id);
		}
		$estados = $this->Chicosperdido->Estado->find('list');
		$this->set(compact('estados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for chicosperdido', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Chicosperdido->delete($id)) {
			$this->Session->setFlash(__('Chicosperdido deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Chicosperdido was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>