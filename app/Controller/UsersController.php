<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		// $this->Auth->allow('register');
	}

	public function login(){
		$this->layout = false;

		if($this->request->is('post')){
			pr($this->request->data);
			if($this->Auth->login()){
				pr($_SESSION);
				exit;
			}
			$this->Session->setFlash(__('Login failed!'), 'alert-danger');		
		}		
	}

	public function register(){

		if($this->request->is('post')){
			
			$this->User->create();

			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__('Saved!'), 'alert-success');
				$this->redirect('/');
			}

			$this->Session->setFlash(__('Failed!'), 'alert-danger');
		}
	}
}
