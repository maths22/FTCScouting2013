<?php

App::uses('AppController', 'Controller');

/**
 * LiveScoutingReports Controller
 *
 * @property LiveScoutingReport $LiveScoutingReport
 */
class LiveScoutingReportsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->LiveScoutingReport->recursive = 0;
        $this->set('liveScoutingReports', $this->paginate());
    }

    public function allreports() {
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->LiveScoutingReport->exists($id)) {
            throw new NotFoundException(__('Invalid live scouting report'));
        }
        $options = array('conditions' => array('LiveScoutingReport.' . $this->LiveScoutingReport->primaryKey => $id));
        $this->set('liveScoutingReport', $this->LiveScoutingReport->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->LiveScoutingReport->create();
            if ($this->LiveScoutingReport->save($this->request->data)) {
                $this->Session->setFlash(__('The live scouting report has been saved'));
                $this->redirect(array('controller' => 'Matches', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Match');
        $teams = $this->LiveScoutingReport->Team->find('list');
        $this->set(compact('teams'));
        $this->set('user', $this->Auth->user('id'));
    }

    /**
     * red method
     *
     * @return void
     */
    public function red($matchNumber = null) {
        if ($this->request->is('post')) {
            $tempData = array(
                'LiveScoutingReport' => array(
                    'user_id' => $this->request->data['LiveScoutingReport']['user_id'],
                    'match_id' => $this->request->data['LiveScoutingReport']['match_id'],
                    'team_id' => $this->request->data['LiveScoutingReport']['team_id_1'],
                    'auto_comments' => $this->request->data['LiveScoutingReport']['auto_comments_1'],
                    'teleop_comments' => $this->request->data['LiveScoutingReport']['teleop_comments_1'],
                    'A3' => $this->request->data['LiveScoutingReport']['A3_1'],
                    'B3' => $this->request->data['LiveScoutingReport']['B3_1'],
                    'C3' => $this->request->data['LiveScoutingReport']['C3_1'],
                    'A2' => $this->request->data['LiveScoutingReport']['A2_1'],
                    'B2' => $this->request->data['LiveScoutingReport']['B2_1'],
                    'C2' => $this->request->data['LiveScoutingReport']['C2_1'],
                    'A1' => $this->request->data['LiveScoutingReport']['A1_1'],
                    'B1' => $this->request->data['LiveScoutingReport']['B1_1'],
                    'C1' => $this->request->data['LiveScoutingReport']['C1_1'],
                    'generalComments' => $this->request->data['LiveScoutingReport']['generalComments_1'],
                )
            );
            $this->LiveScoutingReport->create();
            if ($this->LiveScoutingReport->save($tempData)) {
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
            $tempData = array(
                'LiveScoutingReport' => array(
                    'user_id' => $this->request->data['LiveScoutingReport']['user_id'],
                    'match_id' => $this->request->data['LiveScoutingReport']['match_id'],
                    'team_id' => $this->request->data['LiveScoutingReport']['team_id_2'],
                    'auto_comments' => $this->request->data['LiveScoutingReport']['auto_comments_2'],
                    'teleop_comments' => $this->request->data['LiveScoutingReport']['teleop_comments_2'],
                    'A3' => $this->request->data['LiveScoutingReport']['A3_2'],
                    'B3' => $this->request->data['LiveScoutingReport']['B3_2'],
                    'C3' => $this->request->data['LiveScoutingReport']['C3_2'],
                    'A2' => $this->request->data['LiveScoutingReport']['A2_2'],
                    'B2' => $this->request->data['LiveScoutingReport']['B2_2'],
                    'C2' => $this->request->data['LiveScoutingReport']['C2_2'],
                    'A1' => $this->request->data['LiveScoutingReport']['A1_2'],
                    'B1' => $this->request->data['LiveScoutingReport']['B1_2'],
                    'C1' => $this->request->data['LiveScoutingReport']['C1_2'],
                    'generalComments' => $this->request->data['LiveScoutingReport']['generalComments_2'],
                )
            );
            $this->LiveScoutingReport->create();
            if ($this->LiveScoutingReport->save($tempData)) {
                $this->Session->setFlash(__('The live scouting report has been saved'));
                $this->redirect(array('controller' => 'LiveScoutingReports', 'action' => 'red', strval($this->request->data['LiveScoutingReport']['match_id']+1)));
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Match');
        $this->set(compact('teams'));
        $this->set('user', $this->Auth->user('id'));
        $this->set('match', $matchNumber);
        $teams = $this->LiveScoutingReport->Match->find('first', array('conditions' => array('match_number' => $matchNumber)));
        if(count($teams)>0)
        {
        $this->set('redTeam1', $teams['red_team_1']['team_number']);
        $this->set('redTeam2', $teams['red_team_2']['team_number']);
        }
        else{
        $this->set('redTeam1', null);
        $this->set('redTeam2', null);}
    }
    
    /**
     * blue method
     *
     * @return void
     */
    public function blue($matchNumber = null) {
        if ($this->request->is('post')) {
            $tempData = array(
                'LiveScoutingReport' => array(
                    'user_id' => $this->request->data['LiveScoutingReport']['user_id'],
                    'match_id' => $this->request->data['LiveScoutingReport']['match_id'],
                    'team_id' => $this->request->data['LiveScoutingReport']['team_id_1'],
                    'auto_comments' => $this->request->data['LiveScoutingReport']['auto_comments_1'],
                    'teleop_comments' => $this->request->data['LiveScoutingReport']['teleop_comments_1'],
                    'A3' => $this->request->data['LiveScoutingReport']['A3_1'],
                    'B3' => $this->request->data['LiveScoutingReport']['B3_1'],
                    'C3' => $this->request->data['LiveScoutingReport']['C3_1'],
                    'A2' => $this->request->data['LiveScoutingReport']['A2_1'],
                    'B2' => $this->request->data['LiveScoutingReport']['B2_1'],
                    'C2' => $this->request->data['LiveScoutingReport']['C2_1'],
                    'A1' => $this->request->data['LiveScoutingReport']['A1_1'],
                    'B1' => $this->request->data['LiveScoutingReport']['B1_1'],
                    'C1' => $this->request->data['LiveScoutingReport']['C1_1'],
                    'generalComments' => $this->request->data['LiveScoutingReport']['generalComments_1'],
                )
            );
            $this->LiveScoutingReport->create();
            if ($this->LiveScoutingReport->save($tempData)) {
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
            $tempData = array(
                'LiveScoutingReport' => array(
                    'user_id' => $this->request->data['LiveScoutingReport']['user_id'],
                    'match_id' => $this->request->data['LiveScoutingReport']['match_id'],
                    'team_id' => $this->request->data['LiveScoutingReport']['team_id_2'],
                    'auto_comments' => $this->request->data['LiveScoutingReport']['auto_comments_2'],
                    'teleop_comments' => $this->request->data['LiveScoutingReport']['teleop_comments_2'],
                    'A3' => $this->request->data['LiveScoutingReport']['A3_2'],
                    'B3' => $this->request->data['LiveScoutingReport']['B3_2'],
                    'C3' => $this->request->data['LiveScoutingReport']['C3_2'],
                    'A2' => $this->request->data['LiveScoutingReport']['A2_2'],
                    'B2' => $this->request->data['LiveScoutingReport']['B2_2'],
                    'C2' => $this->request->data['LiveScoutingReport']['C2_2'],
                    'A1' => $this->request->data['LiveScoutingReport']['A1_2'],
                    'B1' => $this->request->data['LiveScoutingReport']['B1_2'],
                    'C1' => $this->request->data['LiveScoutingReport']['C1_2'],
                    'generalComments' => $this->request->data['LiveScoutingReport']['generalComments_2'],
                )
            );
            $this->LiveScoutingReport->create();
            if ($this->LiveScoutingReport->save($tempData)) {
                $this->Session->setFlash(__('The live scouting report has been saved'));
                $this->redirect(array('controller' => 'LiveScoutingReports', 'action' => 'blue', strval($this->request->data['LiveScoutingReport']['match_id']+1)));
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
        }
        $this->loadModel('Match');
        $this->set(compact('teams'));
        $this->set('user', $this->Auth->user('id'));
        $this->set('match', $matchNumber);
        $teams = $this->LiveScoutingReport->Match->find('first', array('conditions' => array('match_number' => $matchNumber)));
        if(count($teams)>0)
        {
        $this->set('blueTeam1', $teams['blue_team_1']['team_number']);
        $this->set('blueTeam2', $teams['blue_team_2']['team_number']);
        }
        else{
        $this->set('blueTeam1', null);
        $this->set('blueTeam2', null);}
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->LiveScoutingReport->exists($id)) {
            throw new NotFoundException(__('Invalid live scouting report'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->LiveScoutingReport->id = $id;
            if ($this->LiveScoutingReport->save($this->request->data)) {
                $this->Session->setFlash(__('The live scouting report has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The live scouting report could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('LiveScoutingReport.' . $this->LiveScoutingReport->primaryKey => $id));
            $this->request->data = $this->LiveScoutingReport->find('first', $options);
        }
        $users = $this->LiveScoutingReport->User->find('list');
        $matches = $this->LiveScoutingReport->Match->find('list');
        $teams = $this->LiveScoutingReport->Team->find('list');
        $this->set(compact('users', 'matches', 'teams'));
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
        $this->LiveScoutingReport->id = $id;
        if (!$this->LiveScoutingReport->exists()) {
            throw new NotFoundException(__('Invalid live scouting report'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->LiveScoutingReport->delete()) {
            $this->Session->setFlash(__('Live scouting report deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Live scouting report was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}
