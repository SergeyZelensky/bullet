<?php
class Autoloader {
	private static $map;
	private static $current;
	private static function loadMap() {
		self::$map = include CNF . 'classMap.php';
	}
	public static function autoload($class) {
		self::loadMap();
		foreach (self::$map as $path => $params) {
			self::$current = $path . $params['prefix'] . '.' . strtolower($class) . '.' . $params['sufix'] . '.php';
			if (file_exists(self::$current)) {
				include self::$current;
				break;
			}
		}
	}
}
spl_autoload_register(array('Autoloader', 'autoload'));