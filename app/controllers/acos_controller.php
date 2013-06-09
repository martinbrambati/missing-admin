<?php
class AcosController extends AppController {

	var $name = 'Acos';

	function index() {
		$this->Aco->recursive = 0;
		$this->set('acos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid aco', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aco', $this->Aco->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Aco->create();
			if ($this->Aco->save($this->data)) {
				$this->Session->setFlash(__('The aco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.', true));
			}
		}
		$parentAcos = $this->Aco->ParentAco->find('list');
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('parentAcos', 'aros'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid aco', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aco->save($this->data)) {
				$this->Session->setFlash(__('The aco has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aco could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aco->read(null, $id);
		}
		$parentAcos = $this->Aco->ParentAco->find('list');
		$aros = $this->Aco->Aro->find('list');
		$this->set(compact('parentAcos', 'aros'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for aco', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aco->delete($id)) {
			$this->Session->setFlash(__('Aco deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aco was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	
}
?>