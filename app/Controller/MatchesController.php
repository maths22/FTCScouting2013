<?php
App::uses('AppController', 'Controller');
/**
 * Matches Controller
 *
 * @property Match $Match
 */
class MatchesController extends AppController {
public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Match->recursive = 0;
		$this->paginate = array('conditions' => array('Match.tournament_id' => $this->Session->read('Tournament.current.Tournament.id') ));
		$this->set('matches', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id));
		$this->set('match', $this->Match->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Match->create();
			if ($this->Match->save($this->request->data)) {
				$this->Session->setFlash(__('The match has been saved'));
				$this->redirect(array('action' => 'add'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		}
		$tournaments = $this->Match->Tournament->find('list');
		$this->set(compact('tournaments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Match->exists($id)) {
			throw new NotFoundException(__('Invalid match'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $this->Match->id=$id;
			if ($this->Match->save($this->request->data)) {
				$this->Session->setFlash(__('The match has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Match.' . $this->Match->primaryKey => $id));
			$this->request->data = $this->Match->find('first', $options);
		}
		$tournaments = $this->Match->Tournament->find('list');
                $redTeam1 = $this->Match->red_team_1;
                $redTeam2 = $this->Match->red_team_2;
                $blueTeam1 = $this->Match->blue_team_1;
                $blueTeam2 = $this->Match->blue_team_2;
		$this->set(compact('tournaments','redTeam1','redTeam2','blueTeam1','blueTeam2'));
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
		$this->Match->id = $id;
		if (!$this->Match->exists()) {
			throw new NotFoundException(__('Invalid match'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Match->delete()) {
			$this->Session->setFlash(__('Match deleted'));
			$this->redirect(array('action' => 'index'));
		}
                
		$this->Session->setFlash(__('Match was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
        
        public function getTeams($match_id)
        {
            $current_match=$this->Match->find('first', array('conditions' => array('Match.id' => $match_id)));
            $this->set('match', $current_match);
        }
}
