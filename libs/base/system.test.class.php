<?php
class test extends baseController {
	public function index() {
		return $this->db->query('SELECT * FROM `managers`')->fetch();
	}
}