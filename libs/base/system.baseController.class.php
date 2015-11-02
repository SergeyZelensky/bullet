<?php
class baseController {
	protected $db;
	public function __construct() {
		$this->db = Bullet::db();
	}
}