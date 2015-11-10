<?php
class Request {
	protected static function exists($index) {
		return isset($_SERVER[$index]);
	}
	public static function get($index) {
		return self::exists($index) ? $_SERVER[$index] : false;
	}
	public static function getRequestUri() {
		return self::get('REQUEST_URI');
	}

}