<?php
App::uses('TeamAccount', 'Model');

/**
 * TeamAccount Test Case
 *
 */
class TeamAccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.team_account',
		'app.team',
		'app.live_scouting',
		'app.pre_scouting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TeamAccount = ClassRegistry::init('TeamAccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TeamAccount);

		parent::tearDown();
	}

}
