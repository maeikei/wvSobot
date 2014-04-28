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

	public $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false),
		'password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'group_id' => array('type' => 'text', 'null' => false, 'length' => 11),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'username', 'unique' => 1)
		),
		'tableParameters' => array()
	);

}
