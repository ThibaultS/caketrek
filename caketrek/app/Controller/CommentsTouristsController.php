<?php
App::uses('AppController', 'Controller');
/**
 * CommentsTourists Controller
 *
 * @property CommentsTourist $CommentsTourist
 */
class CommentsTouristsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CommentsTourist->recursive = 0;
		$this->set('commentsTourists', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		$this->set('commentsTourist', $this->CommentsTourist->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CommentsTourist->create();
			if ($this->CommentsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The comments tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments tourist could not be saved. Please, try again.'));
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
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The comments tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsTourist->read(null, $id);
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
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		if ($this->CommentsTourist->delete()) {
			$this->Session->setFlash(__('Comments tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CommentsTourist->recursive = 0;
		$this->set('commentsTourists', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		$this->set('commentsTourist', $this->CommentsTourist->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CommentsTourist->create();
			if ($this->CommentsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The comments tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments tourist could not be saved. Please, try again.'));
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
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CommentsTourist->save($this->request->data)) {
				$this->Session->setFlash(__('The comments tourist has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comments tourist could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CommentsTourist->read(null, $id);
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
		$this->CommentsTourist->id = $id;
		if (!$this->CommentsTourist->exists()) {
			throw new NotFoundException(__('Invalid comments tourist'));
		}
		if ($this->CommentsTourist->delete()) {
			$this->Session->setFlash(__('Comments tourist deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comments tourist was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
