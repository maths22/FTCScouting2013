<?php
App::uses('PreScouting', 'Model');

/**
 * PreScouting Test Case
 *
 */
class PreScoutingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pre_scouting',
		'app.team_account',
		'app.team',
		'app.live_scouting',
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
		$this->PreScouting = ClassRegistry::init('PreScouting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PreScouting);

		parent::tearDown();
	}

}
