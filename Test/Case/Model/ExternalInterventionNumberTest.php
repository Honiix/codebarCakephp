<?php
App::uses('ExternalInterventionNumber', 'Model');

/**
 * ExternalInterventionNumber Test Case
 *
 */
class ExternalInterventionNumberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.external_intervention_number', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.email', 'app.loan', 'app.person_customer', 'app.person_technician', 'app.loan_article', 'app.article', 'app.location', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.estimate', 'app.interventions', 'app.article_type', 'app.article_damage', 'app.person_technician_return', 'app.personal', 'app.personal_loan', 'app.technical', 'app.technical_loan', 'app.to_person', 'app.from_person', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExternalInterventionNumber = ClassRegistry::init('ExternalInterventionNumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExternalInterventionNumber);

		parent::tearDown();
	}

}
