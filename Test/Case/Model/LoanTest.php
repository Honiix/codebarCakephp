<?php
App::uses('Loan', 'Model');

/**
 * Loan Test Case
 *
 */
class LoanTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.loan', 'app.person_customer', 'app.person_technician', 'app.email', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.evices_problem', 'app.causes_devices_problem', 'app.document', 'app.external_intervention_number', 'app.partner', 'app.brand', 'app.brands_partner', 'app.external_intervention_number_types', 'app.estimate', 'app.interventions', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.location', 'app.article', 'app.article_type', 'app.article_damage', 'app.loan_article', 'app.technical_loan', 'app.problem', 'app.problem_category', 'app.causes_device', 'app.interventions_problem', 'app.to_person', 'app.from_person', 'app.personal', 'app.personal_loan', 'app.technical');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Loan = ClassRegistry::init('Loan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Loan);

		parent::tearDown();
	}

}
