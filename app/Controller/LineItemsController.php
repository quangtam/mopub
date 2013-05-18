<?php
App::uses('AppController', 'Controller');
/**
 * LineItems Controller
 *
 * @property LineItem $LineItem
 */
class LineItemsController extends AppController {

    public $helpers = array('MySqlEnumForm');
    var $components = array('DebugKit.Toolbar');
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LineItem->recursive = 0;
		$this->set('lineItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LineItem->exists($id)) {
			throw new NotFoundException(__('Invalid line item'));
		}
		$options = array('conditions' => array('LineItem.' . $this->LineItem->primaryKey => $id));
		$this->set('lineItem', $this->LineItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LineItem->create();
			if ($this->LineItem->save($this->request->data)) {
				$this->Session->setFlash(__('The line item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.'));
			}
		}
		$orders = $this->LineItem->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LineItem->exists($id)) {
			throw new NotFoundException(__('Invalid line item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LineItem->save($this->request->data)) {
				$this->Session->setFlash(__('The line item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LineItem.' . $this->LineItem->primaryKey => $id));
			$this->request->data = $this->LineItem->find('first', $options);
		}
		$orders = $this->LineItem->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LineItem->id = $id;
		if (!$this->LineItem->exists()) {
			throw new NotFoundException(__('Invalid line item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LineItem->delete()) {
			$this->Session->setFlash(__('Line item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Line item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LineItem->recursive = 0;
		$this->set('lineItems', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->LineItem->exists($id)) {
			throw new NotFoundException(__('Invalid line item'));
		}
		$options = array('conditions' => array('LineItem.' . $this->LineItem->primaryKey => $id));
		$this->set('lineItem', $this->LineItem->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LineItem->create();
			if ($this->LineItem->save($this->request->data)) {
				$this->Session->setFlash(__('The line item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.'));
			}
		}
		$orders = $this->LineItem->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->LineItem->exists($id)) {
			throw new NotFoundException(__('Invalid line item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LineItem->save($this->request->data)) {
				$this->Session->setFlash(__('The line item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The line item could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LineItem.' . $this->LineItem->primaryKey => $id));
			$this->request->data = $this->LineItem->find('first', $options);
		}
		$orders = $this->LineItem->Order->find('list');
		$this->set(compact('orders'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LineItem->id = $id;
		if (!$this->LineItem->exists()) {
			throw new NotFoundException(__('Invalid line item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LineItem->delete()) {
			$this->Session->setFlash(__('Line item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Line item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
