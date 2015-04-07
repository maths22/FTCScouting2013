<?php
App::uses('PreScoutingReport', 'Model');

/**
 * PreScoutingReport Test Case
 *
 */
class PreScoutingReportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pre_scouting_report',
		'app.user',
		'app.team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PreScoutingReport = ClassRegistry::init('PreScoutingReport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PreScoutingReport);

		parent::tearDown();
	}

}
