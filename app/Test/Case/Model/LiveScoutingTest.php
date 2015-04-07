<?php
App::uses('LiveScouting', 'Model');

/**
 * LiveScouting Test Case
 *
 */
class LiveScoutingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.live_scouting',
		'app.team_account',
		'app.team',
		'app.pre_scouting',
		'app.match',
		'app.tournament'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LiveScouting = ClassRegistry::init('LiveScouting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LiveScouting);

		parent::tearDown();
	}

}
