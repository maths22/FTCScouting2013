<?php
/**
 * MatchFixture
 *
 */
class MatchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tournament_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'match_number' => array('type' => 'integer', 'null' => false, 'default' => null),
		'red_team_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'red_team_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'blue_team_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'blue_team_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_matchSchedule_liveScouting1_idx' => array('column' => 'id', 'unique' => 0),
			'tournamentId' => array('column' => 'tournament_id', 'unique' => 0),
			'fk_matchschedule_teams1_idx' => array('column' => 'red_team_1', 'unique' => 0),
			'fk_matchschedule_teams2_idx' => array('column' => 'red_team_2', 'unique' => 0),
			'fk_matchschedule_teams3_idx' => array('column' => 'blue_team_1', 'unique' => 0),
			'fk_matchschedule_teams4_idx' => array('column' => 'blue_team_2', 'unique' => 0)
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
			'tournament_id' => 1,
			'match_number' => 1,
			'red_team_1' => 1,
			'red_team_2' => 1,
			'blue_team_1' => 1,
			'blue_team_2' => 1
		),
	);

}
