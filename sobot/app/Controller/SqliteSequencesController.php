<?php
App::uses('AppController', 'Controller');
/**
 * SqliteSequences Controller
 *
 * @property SqliteSequence $SqliteSequence
 * @property PaginatorComponent $Paginator
 */
class SqliteSequencesController extends AppController {

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
		$this->SqliteSequence->recursive = 0;
		$this->set('sqliteSequences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SqliteSequence->exists($id)) {
			throw new NotFoundException(__('Invalid sqlite sequence'));
		}
		$options = array('conditions' => array('SqliteSequence.' . $this->SqliteSequence->primaryKey => $id));
		$this->set('sqliteSequence', $this->SqliteSequence->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SqliteSequence->create();
			if ($this->SqliteSequence->save($this->request->data)) {
				$this->Session->setFlash(__('The sqlite sequence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sqlite sequence could not be saved. Please, try again.'));
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
		if (!$this->SqliteSequence->exists($id)) {
			throw new NotFoundException(__('Invalid sqlite sequence'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SqliteSequence->save($this->request->data)) {
				$this->Session->setFlash(__('The sqlite sequence has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sqlite sequence could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SqliteSequence.' . $this->SqliteSequence->primaryKey => $id));
			$this->request->data = $this->SqliteSequence->find('first', $options);
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
		$this->SqliteSequence->id = $id;
		if (!$this->SqliteSequence->exists()) {
			throw new NotFoundException(__('Invalid sqlite sequence'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SqliteSequence->delete()) {
			$this->Session->setFlash(__('The sqlite sequence has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sqlite sequence could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
