<?php
/**
 * LiveScoutingReportFixture
 *
 */
class LiveScoutingReportFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'match_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'auto_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'teleop_comments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'generalComments' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1024, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'MatchId' => array('column' => 'match_id', 'unique' => 0),
			'fk_live_scoutings_team_accounts1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_live_scoutings_teams1_idx' => array('column' => 'team_id', 'unique' => 0)
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
			'user_id' => 1,
			'match_id' => 1,
			'team_id' => 1,
			'auto_comments' => 'Lorem ipsum dolor sit amet',
			'teleop_comments' => 'Lorem ipsum dolor sit amet',
			'generalComments' => 'Lorem ipsum dolor sit amet'
		),
	);

}
