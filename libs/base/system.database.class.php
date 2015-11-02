<?php
class database {
	public $db;
	public function __construct($params) {
		$this->db = new PDO('mysql:host=localhost;dbname=' . $params['dbname'] . ';charset=' . $params['charset'], $params['user'], $params['password']);
	}
}