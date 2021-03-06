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
class AddBotController extends AppController {
	public $uses = array('Twitter');

	private function getAccout() {
		///$this->set('twitter',$this->Twitter->find('all'));
		$accVars = array();
		$accRet = array();
		foreach ($this->Twitter->find('all') as $key => $value){
//			debug($value);
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
				array_push($accRet, array('name' => $acc->getName(),
											'screenName' => $acc->getScreenName(),
											'icon' => $acc->getIcon(),
											'sha1' => $value['Twitter']['sha1']
											));
			}
		}
		//debug($accVars);
		$this->set('twitter',$accVars);
//		debug($accRet);
		return $accRet;
	}


	public function index() {
		$this->getAccout();
	}

	public function report() {
		$accVars = $this->getAccout();
		$twitter_name = array();
		foreach ($accVars as &$value) {
			$name_t =$value['sha1'];
			$twitter_name[$name_t] = $value['name'];
		}
		$this->set('twitter_name',$twitter_name);
		debug($twitter_name);
		if($this->request->isPost() || $this->request->isPut()) {
			debug($this->data);
//			debug($this->data);
		}

	}

}
