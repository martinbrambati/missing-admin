<?php
class TipofotosController extends AppController {

	var $name = 'Tipofotos';

	function index() {
		$this->Tipofoto->recursive = 0;
		$this->set('tipofotos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipofoto', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipofoto', $this->Tipofoto->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipofoto->create();
			if ($this->Tipofoto->save($this->data)) {
				$this->Session->setFlash(__('The tipofoto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipofoto could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipofoto', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipofoto->save($this->data)) {
				$this->Session->setFlash(__('The tipofoto has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipofoto could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipofoto->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipofoto', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipofoto->delete($id)) {
			$this->Session->setFlash(__('Tipofoto deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipofoto was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>