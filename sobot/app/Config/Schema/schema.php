<?php 
class AppSchema extends CakeSchema {

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $sqlite_sequence = array(
		'name' => array('type' => 'text', 'null' => true),
		'seq' => array('type' => 'text', 'null' => true),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

	public $twitterOAuth = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'apiKey' => array('type' => 'text', 'null' => false),
		'apiSecret' => array('type' => 'text', 'null' => false),
		'accessToken' => array('type' => 'text', 'null' => false),
		'accessTokenSecret' => array('type' => 'text', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

	public $twitterTask = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'keywords' => array('type' => 'text', 'null' => false),
		'twitters' => array('type' => 'text', 'null' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);
	
	
	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'group_id' => array('type' => 'text', 'null' => false, 'length' => 11),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array()
	);

}
