<?php
class Registry {
	# Collection Object
	protected static $Collection;

	public static function issetUnit($index) {
		return isset(self::$Collection[$index]);
	}
	public static function getUnit($index) {
		return self::issetUnit($index) ? self::$Collection[$index] : false;
	}
	public static function setUnit($index, $value) {
		self::$Collection[$index] = $value;
	}
	public static function clearUnit($index) {
		if (self::issetUnit($index)) {
			self::$Collection[$index] = null;
		} else {
			return false;
		}
	}
	private function __construct() {}
	private function __clone() {}
}
