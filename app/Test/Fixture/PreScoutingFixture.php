<?php
/**
 * PreScoutingFixture
 *
 */
class PreScoutingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'team_account_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'owner' => array('column' => 'team_account_id', 'unique' => 0),
			'teamNumber' => array('column' => 'team_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'team_account_id' => 1,
			'team_id' => 1,
			'comments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
