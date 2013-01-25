<?php
App::uses('AppController', 'Controller');
/**
 * CommentsPoints Controller
 *
 * @property CommentsPoint $CommentsPoint
 */
class CommentsPointsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommentsPoint->recursive = 0;
		$this->set('commentsPoints', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		$this->set('commentsPoint', $this->CommentsPoint->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentsPoint->create();
			if ($this->CommentsPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The comments point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments point could not be saved. Please, try again.'));
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
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The comments point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments point could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsPoint->read(null, $id);
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
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		if ($this->CommentsPoint->delete()) {
			$this->Session->setFlash(__('Comments point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentsPoint->recursive = 0;
		$this->set('commentsPoints', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		$this->set('commentsPoint', $this->CommentsPoint->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentsPoint->create();
			if ($this->CommentsPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The comments point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments point could not be saved. Please, try again.'));
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
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The comments point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments point could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsPoint->read(null, $id);
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
		$this->CommentsPoint->id = $id;
		if (!$this->CommentsPoint->exists()) {
			throw new NotFoundException(__('Invalid comments point'));
		}
		if ($this->CommentsPoint->delete()) {
			$this->Session->setFlash(__('Comments point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
