<?php
trait extensionCreator {
	protected $memcache;
	protected $orm;
	public function __Construct() {
		$this->memcache = Kernel::get('memcache');
		$this->db = Kernel::get('database');
		$this->orm = Kernel::get('orm');
	}
}