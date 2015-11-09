<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('register');
	}

	public function login(){

		if($this->Auth->loggedIn()) $this->redirect($this->Auth->redirectUrl());
		
		$this->layout = false;

		if($this->request->is('post')){
			pr($this->request->data);
			if($this->Auth->login()){
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Session->setFlash(__('Login failed!'), 'alert-danger');		
		}		
	}

	public function logout(){
		return $this->redirect($this->Auth->logout());
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
