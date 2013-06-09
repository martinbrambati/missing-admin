<?php
class DiasController extends AppController {

	var $name = 'Dias';

	function index() {
		$this->Dia->recursive = 0;
		$this->set('dias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dia', $this->Dia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dia->create();
			if ($this->Dia->save($this->data)) {
				$this->Session->setFlash(__('The dia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dia could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dia->save($this->data)) {
				$this->Session->setFlash(__('The dia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dia->delete($id)) {
			$this->Session->setFlash(__('Dia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>