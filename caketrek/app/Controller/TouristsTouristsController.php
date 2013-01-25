<?php
App::uses('AppController', 'Controller');
/**
 * TouristsTourists Controller
 *
 * @property TouristsTourist $TouristsTourist
 */
class TouristsTouristsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TouristsTourist->recursive = 0;
		$this->set('touristsTourists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		$this->set('touristsTourist', $this->TouristsTourist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TouristsTourist->create();
			if ($this->TouristsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists tourist could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TouristsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TouristsTourist->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		if ($this->TouristsTourist->delete()) {
			$this->Session->setFlash(__('Tourists tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourists tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TouristsTourist->recursive = 0;
		$this->set('touristsTourists', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		$this->set('touristsTourist', $this->TouristsTourist->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TouristsTourist->create();
			if ($this->TouristsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists tourist could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TouristsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TouristsTourist->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TouristsTourist->id = $id;
		if (!$this->TouristsTourist->exists()) {
			throw new NotFoundException(__('Invalid tourists tourist'));
		}
		if ($this->TouristsTourist->delete()) {
			$this->Session->setFlash(__('Tourists tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourists tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
