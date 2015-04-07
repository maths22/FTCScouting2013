<?php
App::uses('AppController', 'Controller');
/**
 * PreScoutingReports Controller
 *
 * @property PreScoutingReport $PreScoutingReport
 */
class PreScoutingReportsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PreScoutingReport->recursive = 0;
		$this->set('preScoutingReports', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PreScoutingReport->exists($id)) {
			throw new NotFoundException(__('Invalid pre scouting report'));
		}
		$options = array('conditions' => array('PreScoutingReport.' . $this->PreScoutingReport->primaryKey => $id));
		$this->set('preScoutingReport', $this->PreScoutingReport->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PreScoutingReport->create();
			if ($this->PreScoutingReport->save($this->request->data)) {
				$this->Session->setFlash(__('The pre scouting report has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pre scouting report could not be saved. Please, try again.'));
			}
		}
		$users = $this->PreScoutingReport->User->find('list');
		$teams = $this->PreScoutingReport->Team->find('list');
		$this->set(compact('users', 'teams'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PreScoutingReport->exists($id)) {
			throw new NotFoundException(__('Invalid pre scouting report'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $this->PreScoutingReport->id = $id;
			if ($this->PreScoutingReport->save($this->request->data)) {
				$this->Session->setFlash(__('The pre scouting report has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pre scouting report could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PreScoutingReport.' . $this->PreScoutingReport->primaryKey => $id));
			$this->request->data = $this->PreScoutingReport->find('first', $options);
		}
		$users = $this->PreScoutingReport->User->find('list');
		$teams = $this->PreScoutingReport->Team->find('list');
		$this->set(compact('users', 'teams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PreScoutingReport->id = $id;
		if (!$this->PreScoutingReport->exists()) {
			throw new NotFoundException(__('Invalid pre scouting report'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PreScoutingReport->delete()) {
			$this->Session->setFlash(__('Pre scouting report deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pre scouting report was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
