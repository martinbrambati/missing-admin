<?php
class MediosController extends AppController {

	var $name = 'Medios';

	public $components = array('Prg');

	public $presetVars = array(
	array('field' => 'name', 'type' => 'like'),
	array('field' => 'tipofrecuencia_id', 'type' => 'value'),
	array('field' => 'cantidad_fotos', 'type' => 'value'),
	array('field' => 'tipofoto_id', 'type' => 'value'),
	array('field' => 'enviadatos', 'type' => 'value'),
	array('field' => 'zona_id', 'type' => 'value')
	);

	public function find() {
			
		$this->Prg->commonProcess();
			
		$this->paginate['conditions'] = $this->Medio->parseCriteria($this->passedArgs);
		$this->set('medios', $this->paginate());
			
		$tipofrecuencias = $this->Medio->Tipofrecuencia->find('list');
		$tipofotos = $this->Medio->Tipofoto->find('list');
		$zonas = $this->Medio->Zona->find('list');
		$dias = $this->Medio->Dia->find('list');
		
		
		if(!$this->data || !array_key_exists("zona_id",$this->data ["Medio"])){
			$this->data["Medio"]["zona_id"] = null;
		}
		if(!$this->data || !array_key_exists("tipofrecuencia_id",$this->data ["Medio"])){
			$this->data["Medio"]["tipofrecuencia_id"] = null;
		}
		if(!$this->data || !array_key_exists("tipofoto_id",$this->data ["Medio"])){
			$this->data["Medio"]["tipofoto_id"] = null;
		}
		
		$this->set(compact('tipofrecuencias', 'tipofotos', 'zonas', 'dias'));
			
	}

	function index() {
		$this->Medio->recursive = 0;
		$this->set('medios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid medio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('medio', $this->Medio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Medio->create();
			if ($this->Medio->save($this->data)) {
				$this->Session->setFlash(__('The medio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medio could not be saved. Please, try again.', true));
			}
		}
		$tipofrecuencias = $this->Medio->Tipofrecuencia->find('list');
		$tipofotos = $this->Medio->Tipofoto->find('list');
		$zonas = $this->Medio->Zona->find('list');
		$dias = $this->Medio->Dia->find('list');
		$this->set(compact('tipofrecuencias', 'tipofotos', 'zonas', 'dias'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid medio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Medio->save($this->data)) {
				$this->Session->setFlash(__('The medio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Medio->read(null, $id);
		}
		$tipofrecuencias = $this->Medio->Tipofrecuencia->find('list');
		$tipofotos = $this->Medio->Tipofoto->find('list');
		$zonas = $this->Medio->Zona->find('list');
		$dias = $this->Medio->Dia->find('list');
		$this->set(compact('tipofrecuencias', 'tipofotos', 'zonas', 'dias'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for medio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Medio->delete($id)) {
			$this->Session->setFlash(__('Medio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Medio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>