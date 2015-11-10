<?php
class memcache {
	public static function instance() {
		return new memcache('127.0.0.1', 11211);
	}
}