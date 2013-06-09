<?php
class DestinatariosController extends AppController {

	var $name = 'Destinatarios';

	function index() {
		$this->Destinatario->recursive = 0;
		$this->set('destinatarios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid destinatario', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('destinatario', $this->Destinatario->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Destinatario->create();
			if ($this->Destinatario->save($this->data)) {
				$this->Session->setFlash(__('The destinatario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destinatario could not be saved. Please, try again.', true));
			}
		}
		$medios = $this->Destinatario->Medio->find('list');
		$this->set(compact('medios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid destinatario', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Destinatario->save($this->data)) {
				$this->Session->setFlash(__('The destinatario has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The destinatario could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Destinatario->read(null, $id);
		}
		$medios = $this->Destinatario->Medio->find('list');
		$this->set(compact('medios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for destinatario', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Destinatario->delete($id)) {
			$this->Session->setFlash(__('Destinatario deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Destinatario was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>