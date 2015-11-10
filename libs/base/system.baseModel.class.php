<?php
class baseModel {
	protected $db;
	protected $memcache;
	protected $orm;
	public function __construct() {
		$this->db = Kernel::get('database');
		$this->memcache = Kernel::get('memcache');
		$this->orm = Kernel::get('orm');
	}
}
