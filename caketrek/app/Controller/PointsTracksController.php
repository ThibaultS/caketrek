<?php
App::uses('AppController', 'Controller');
/**
 * PointsTracks Controller
 *
 * @property PointsTrack $PointsTrack
 */
class PointsTracksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PointsTrack->recursive = 0;
		$this->set('pointsTracks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		$this->set('pointsTrack', $this->PointsTrack->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PointsTrack->create();
			if ($this->PointsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The points track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points track could not be saved. Please, try again.'));
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
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PointsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The points track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PointsTrack->read(null, $id);
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
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		if ($this->PointsTrack->delete()) {
			$this->Session->setFlash(__('Points track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Points track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PointsTrack->recursive = 0;
		$this->set('pointsTracks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		$this->set('pointsTrack', $this->PointsTrack->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PointsTrack->create();
			if ($this->PointsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The points track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points track could not be saved. Please, try again.'));
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
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PointsTrack->save($this->request->data)) {
				$this->Session->setFlash(__('The points track has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points track could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PointsTrack->read(null, $id);
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
		$this->PointsTrack->id = $id;
		if (!$this->PointsTrack->exists()) {
			throw new NotFoundException(__('Invalid points track'));
		}
		if ($this->PointsTrack->delete()) {
			$this->Session->setFlash(__('Points track deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Points track was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
