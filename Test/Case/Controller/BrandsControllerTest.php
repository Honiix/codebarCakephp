<?php
App::uses('BrandsController', 'Controller');

/**
 * TestBrandsController *
 */
class TestBrandsController extends BrandsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * BrandsController Test Case
 *
 */
class BrandsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.brand', 'app.partner', 'app.external_intervention_number_type', 'app.external_intervention_number', 'app.intervention', 'app.device', 'app.device_type', 'app.person', 'app.language', 'app.email', 'app.loan', 'app.loan_article', 'app.article', 'app.location', 'app.operation', 'app.operation_type', 'app.operation_category', 'app.estimate', 'app.estimate_item', 'app.article_type', 'app.article_damage', 'app.personal_loan', 'app.personal_loan_reason', 'app.technical_loan', 'app.problem', 'app.problem_category', 'app.cause', 'app.causes_devices_problem', 'app.diagnostic', 'app.causes_diagnostic', 'app.interventions_problem', 'app.document', 'app.brands_partner');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Brands = new TestBrandsController();
		$this->Brands->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Brands);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
