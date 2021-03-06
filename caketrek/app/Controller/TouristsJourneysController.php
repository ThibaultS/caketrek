<?php
App::uses('AppController', 'Controller');
/**
 * TouristsJourneys Controller
 *
 * @property TouristsJourney $TouristsJourney
 */
class TouristsJourneysController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TouristsJourney->recursive = 0;
		$this->set('touristsJourneys', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		$this->set('touristsJourney', $this->TouristsJourney->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TouristsJourney->create();
			if ($this->TouristsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists journey could not be saved. Please, try again.'));
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
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TouristsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TouristsJourney->read(null, $id);
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
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		if ($this->TouristsJourney->delete()) {
			$this->Session->setFlash(__('Tourists journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourists journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TouristsJourney->recursive = 0;
		$this->set('touristsJourneys', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		$this->set('touristsJourney', $this->TouristsJourney->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TouristsJourney->create();
			if ($this->TouristsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists journey could not be saved. Please, try again.'));
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
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TouristsJourney->save($this->request->data)) {
				$this->Session->setFlash(__('The tourists journey has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourists journey could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TouristsJourney->read(null, $id);
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
		$this->TouristsJourney->id = $id;
		if (!$this->TouristsJourney->exists()) {
			throw new NotFoundException(__('Invalid tourists journey'));
		}
		if ($this->TouristsJourney->delete()) {
			$this->Session->setFlash(__('Tourists journey deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tourists journey was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
