<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('Account','Vendor/twitter');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class TwitterController extends AppController {

	public $uses = array('Twitter');
	public function index() {
		///$this->set('twitter',$this->Twitter->find('all'));
		$accVars = array();
		foreach ($this->Twitter->find('all') as $key => $value){
//			debug($value['Twitter']);
//			debug($value['Twitter']['apiKey']);
			$acc = new Account(
				$value['Twitter']['apiKey'],
				$value['Twitter']['apiSecret'],
				$value['Twitter']['accessToken'],
				$value['Twitter']['accessTokenSecret']
			);
			if( $acc->isOK() ) {
				array_push($accVars, array('name' => $acc->getName(),
											'screenName' => $acc->getScreenName(),
											'icon' => $acc->getIcon()
											));
			}
		}
		//debug($accVars);
		$this->set('twitter',$accVars);
	}
	public function oauth() {
		//debug($this->Twitter->find('all'));
		if($this->request->isPost() || $this->request->isPut()) {
			$saveInModel = $this->Twitter->find('first', 
				array('conditions' => array('Twitter.apiKey' => $this->data['apiKeys']['apiKey'],
								'Twitter.apiSecret' => $this->data['apiKeys']['apiSecret'],
								'Twitter.accessToken' => $this->data['apiKeys']['accessToken'],
								'Twitter.accessTokenSecret' => $this->data['apiKeys']['accessTokenSecret']
							)
					)
				);
			$data = array('Twitter' =>array(
									'apiKey' => $this->data['apiKeys']['apiKey'],
									'apiSecret' => $this->data['apiKeys']['apiSecret'],
									'accessToken' => $this->data['apiKeys']['accessToken'],
									'accessTokenSecret' => $this->data['apiKeys']['accessTokenSecret'],
								)
						);
			debug($data);
			debug($saveInModel);
			if(empty($saveInModel)) {
				if($this->Twitter->validates($data)) {
					$this->Twitter->save($data);
				}
				else {
					$errors = $this->Twitter->validationErrors;
				}
			}
//			$this->redirect(array('controller' => 'twitter', 'action' => 'index','?' =>array('uuid'=>'')));
			$this->redirect(array('controller' => 'twitter', 'action' => 'index'));
		}
	}

	public function addBot() {
	}


}
