<?php
class TipofrecuenciasController extends AppController {

	var $name = 'Tipofrecuencias';

	function index() {
		$this->Tipofrecuencia->recursive = 0;
		$this->set('tipofrecuencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipofrecuencia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipofrecuencia', $this->Tipofrecuencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipofrecuencia->create();
			if ($this->Tipofrecuencia->save($this->data)) {
				$this->Session->setFlash(__('The tipofrecuencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipofrecuencia could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipofrecuencia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipofrecuencia->save($this->data)) {
				$this->Session->setFlash(__('The tipofrecuencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipofrecuencia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipofrecuencia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipofrecuencia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipofrecuencia->delete($id)) {
			$this->Session->setFlash(__('Tipofrecuencia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipofrecuencia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>