<?php
class database {
	public function instance($params) {
		return new PDO('mysql:host=127.0.0.1;dbname=' . $params['dbname'], $params['user'], $params['password']);
	}
}