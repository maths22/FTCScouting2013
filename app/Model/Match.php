<?php

App::uses('AppModel', 'Model');

/**
 * Match Model
 *
 * @property Tournament $Tournament
 * @property LiveScoutingReport $LiveScoutingReport
 * @property Team $red_team_1
 * @property Team $red_team_2
 * @property Team $blue_team_1
 * @property Team $blue_team_2
 *
 */
class Match extends AppModel {

    public $displayField = 'match_number';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'tournament_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'match_number' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'red_team_1' => array(
            'team_number' => array(
                'rule' => array('validateForeignKey'),
                'message' => 'Invalid team number',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'red_team_2' => array(
            'team_number' => array(
                'rule' => array('validateForeignKey'),
                'message' => 'Invalid team number',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'blue_team_1' => array(
            'team_number' => array(
                'rule' => array('validateForeignKey'),
                'message' => 'Invalid team number',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'blue_team_2' => array(
            'team_number' => array(
                'rule' => array('validateForeignKey'),
                'message' => 'Invalid team number',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    
    /**
     * Check if a given foreign key exists in the model (given its name).
     */
    public function validateForeignKey($field) {
        $associations = array_map(
                create_function('$v', 'return $v["foreignKey"];'), $this->belongsTo
        );

        $aliases = array();
        foreach ($associations as $model => $foreignKey) {
            if (!array_key_exists($foreignKey, $aliases))
                $aliases[$foreignKey] = array();
            array_push($aliases[$foreignKey], $model);
        }

        foreach ($aliases[key($field)] as $model) {
            $count = $this->{$model}->find('count', array(
                'conditions' => array(
                    $model . '.' . $this->{$model}->primaryKey => current($field)
                ),
                'recursive' => -1
                    ));
            if ($count == 1)
                return true;
        }
        return false;
    }

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Tournament' => array(
            'className' => 'Tournament',
            'foreignKey' => 'tournament_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'red_team_1' => array(
            'className' => 'Team',
            'foreignKey' => 'red_team_1',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'red_team_2' => array(
            'className' => 'Team',
            'foreignKey' => 'red_team_2',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'blue_team_1' => array(
            'className' => 'Team',
            'foreignKey' => 'blue_team_1',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'blue_team_2' => array(
            'className' => 'Team',
            'foreignKey' => 'blue_team_2',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'LiveScoutingReport' => array(
            'className' => 'LiveScoutingReport',
            'foreignKey' => 'match_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    public function beforeValidate($options = array()) {
        if (isset($this->data[$this->alias]['red_team_1'])) {
            $tmpTeam= $this->red_team_1->findByTeamNumber($this->data[$this->alias]['red_team_1']);
            if(!$tmpTeam)
            {
                $this->data[$this->alias]['red_team_1'] = -1;
            }
            else
            {
                $this->data[$this->alias]['red_team_1'] = $tmpTeam['red_team_1']['id'];
            }
        }
        if (isset($this->data[$this->alias]['red_team_2'])) {
            $tmpTeam= $this->red_team_2->findByTeamNumber($this->data[$this->alias]['red_team_2']);
            if(!$tmpTeam)
            {
                $this->data[$this->alias]['red_team_2'] = -1;
            }
            else
            {
                $this->data[$this->alias]['red_team_2'] = $tmpTeam['red_team_2']['id'];
            }
        }
        if (isset($this->data[$this->alias]['blue_team_1'])) {
            $tmpTeam= $this->blue_team_1->findByTeamNumber($this->data[$this->alias]['blue_team_1']);
            if(!$tmpTeam)
            {
                $this->data[$this->alias]['blue_team_1'] = -1;
            }
            else
            {
                $this->data[$this->alias]['blue_team_1'] = $tmpTeam['blue_team_1']['id'];
            }
        }
        if (isset($this->data[$this->alias]['blue_team_2'])) {
            $tmpTeam= $this->blue_team_2->findByTeamNumber($this->data[$this->alias]['blue_team_2']);
            if(!$tmpTeam)
            {
                $this->data[$this->alias]['blue_team_2'] = -1;
            }
            else
            {
                $this->data[$this->alias]['blue_team_2'] = $tmpTeam['blue_team_2']['id'];
            }
        }
        return true;
    }

    
}
