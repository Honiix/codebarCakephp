<?php
App::uses('AppController', 'Controller');
/**
 * Interventions Controller
 *
 * @property Intervention $Intervention
 */
class InterventionsController extends AppController {

		public $helpers = array('DataTable.DataTable');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Intervention->recursive = -1;
		$this->set('interventions', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Intervention->create();
			if ($this->Intervention->save($this->request->data)) {
				$this->Session->setFlash(__('The intervention has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intervention could not be saved. Please, try again.'));
			}
		}
		$devices = $this->Intervention->Device->find('list');
		$problems = $this->Intervention->Problem->find('list');
		$this->set(compact('devices', 'problems'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Intervention->id = $id;
		if (!$this->Intervention->exists()) {
			throw new NotFoundException(__('Invalid intervention'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Intervention->save($this->request->data)) {
				$this->Session->setFlash(__('The intervention has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intervention could not be saved. Please, try again.'));
			}
		} else {
			$this->Intervention->recursive = 2;
			$this->request->data = $this->Intervention->read(null, $id);
		}
	}


/**
 * Components
 *
 * @var array
 */
    public $components = array(
		'DataTable.DataTable' => array(
			'columns' => array(
				'id' => false,
				'description' => 'Description',
				'diagnostic' => 'Diagnostic',
				'breakdown_found' => 'Breakdown found',
				'Actions' => null
			)
		)
	);
}