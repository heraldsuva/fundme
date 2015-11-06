<?php
App::uses('AppController', 'Controller');

class TemplatesController extends AppController {

	/**
 * This controller does not use a model
 *
 * @var array
 */

	public $uses = array();

	var $layout = 'template';

	public function beforeFilter(){
		parent::beforeFilter();
		// $this->Auth->allow('index','signin','signup','campaign');
		$this->Auth->allow();
	}

	public function beforeRender(){
		//  Default title
		if (empty($this->pageTitle)) {
		    $this->pageTitle = __(Inflector::humanize($this->action), true).' | '.__(Inflector::humanize(!empty($this->params['controller'])?$this->params['controller']:$this->name), true);
		}
		$this->set('title_for_layout', $this->pageTitle);
	}

	public function index(){

	}

	public function signin(){

	}

	public function signup(){

	}

	public function campaign(){

	}
}
