<?php
class DiasMediosController extends AppController {

	var $name = 'DiasMedios';

	function index() {
		$this->DiasMedio->recursive = 0;
		$this->set('diasMedios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dias medio', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('diasMedio', $this->DiasMedio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DiasMedio->create();
			if ($this->DiasMedio->save($this->data)) {
				$this->Session->setFlash(__('The dias medio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dias medio could not be saved. Please, try again.', true));
			}
		}
		$dias = $this->DiasMedio->Dium->find('list');
		$medios = $this->DiasMedio->Medio->find('list');
		$this->set(compact('dias', 'medios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dias medio', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiasMedio->save($this->data)) {
				$this->Session->setFlash(__('The dias medio has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dias medio could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiasMedio->read(null, $id);
		}
		$dias = $this->DiasMedio->Dium->find('list');
		$medios = $this->DiasMedio->Medio->find('list');
		$this->set(compact('dias', 'medios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dias medio', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiasMedio->delete($id)) {
			$this->Session->setFlash(__('Dias medio deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dias medio was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>