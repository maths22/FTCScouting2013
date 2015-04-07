<?php
App::uses('AppModel', 'Model');
/**
 * PreScoutingReport Model
 *
 * @property User $User
 * @property Team $Team
 */
class PreScoutingReport extends AppModel {

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
        return true;
    }
}
