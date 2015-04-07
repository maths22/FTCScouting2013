<?php
App::uses('LiveScoutingReport', 'Model');

/**
 * LiveScoutingReport Test Case
 *
 */
class LiveScoutingReportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.live_scouting_report',
		'app.user',
		'app.match',
		'app.team'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LiveScoutingReport = ClassRegistry::init('LiveScoutingReport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LiveScoutingReport);

		parent::tearDown();
	}

}
