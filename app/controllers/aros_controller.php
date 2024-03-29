<?php
class ArosController extends AppController {

	var $name = 'Aros';

	function index() {
		$this->Aro->recursive = 0;
		$this->set('aros', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid aro', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('aro', $this->Aro->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Aro->create();
			if ($this->Aro->save($this->data)) {
				$this->Session->setFlash(__('The aro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.', true));
			}
		}
		$parentAros = $this->Aro->ParentAro->find('list');
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('parentAros', 'acos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid aro', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Aro->save($this->data)) {
				$this->Session->setFlash(__('The aro has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aro could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Aro->read(null, $id);
		}
		$parentAros = $this->Aro->ParentAro->find('list');
		$acos = $this->Aro->Aco->find('list');
		$this->set(compact('parentAros', 'acos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for aro', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Aro->delete($id)) {
			$this->Session->setFlash(__('Aro deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Aro was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>