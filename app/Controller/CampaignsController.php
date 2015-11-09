<?php
App::uses('AppController', 'Controller');

class CampaignsController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
	}

	public function create(){

		if($this->request->is('post')){
			pr($this->request->data);exit;
		}

		$categories = $this->Campaign->Category->find('list',array('fields'=>array('Category.id','Category.name')));

		$this->set('categories',$categories);

	}
}
