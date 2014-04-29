<?php
App::uses('AppController', 'Controller');
/**
 * Twitters Controller
 *
 * @property Twitter $Twitter
 * @property PaginatorComponent $Paginator
 */
class TwittersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Twitter->recursive = 0;
		$this->set('twitters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Twitter->exists($id)) {
			throw new NotFoundException(__('Invalid twitter'));
		}
		$options = array('conditions' => array('Twitter.' . $this->Twitter->primaryKey => $id));
		$this->set('twitter', $this->Twitter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Twitter->create();
			if ($this->Twitter->save($this->request->data)) {
				$this->Session->setFlash(__('The twitter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter could not be saved. Please, try again.'));
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
		if (!$this->Twitter->exists($id)) {
			throw new NotFoundException(__('Invalid twitter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Twitter->save($this->request->data)) {
				$this->Session->setFlash(__('The twitter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Twitter.' . $this->Twitter->primaryKey => $id));
			$this->request->data = $this->Twitter->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Twitter->id = $id;
		if (!$this->Twitter->exists()) {
			throw new NotFoundException(__('Invalid twitter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Twitter->delete()) {
			$this->Session->setFlash(__('The twitter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The twitter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
