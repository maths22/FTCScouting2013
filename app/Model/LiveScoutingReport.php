<?php
App::uses('AppModel', 'Model');
/**
 * LiveScoutingReport Model
 *
 * @property User $User
 * @property Match $Match
 * @property Team $Team
 */
class LiveScoutingReport extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'match_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'team_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'A3' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'B3' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'C3' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'A2' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'B2' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'C2' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'A1' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'B1' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
            'C1' => array(
			'naturalNumber' => array(
				'rule' => array('naturalNumber',true),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'match_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public function beforeValidate($options = array()) {
        if (isset($this->data[$this->alias]['team_id'])) {
            $tmpTeam= $this->Team->findByTeamNumber($this->data[$this->alias]['team_id']);
            if(!$tmpTeam)
            {
                $this->data[$this->alias]['team_id'] = -1;
            }
            else
            {
                $this->data[$this->alias]['team_id'] = $tmpTeam['Team']['id'];
            }
        }
        if (isset($this->data[$this->alias]['match_id'])) {
            $tmpMatch= $this->Match->find('first',array('conditions'=>array('match_number' => $this->data[$this->alias]['match_id'],
                'tournament_id' => CakeSession::read('Tournament.current.Tournament.id'))));
            if(!$tmpMatch)
            {
                $this->data[$this->alias]['match_id'] = -1;
            }
            else
            {
                $this->data[$this->alias]['match_id'] = $tmpMatch['Match']['id'];
            }
        }
        return true;
    }
}
