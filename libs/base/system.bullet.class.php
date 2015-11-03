<?php
class Bullet extends Registry {
	public static function instance($configuration) {
		foreach ($configuration as $module => $moduleSettings) {
			if (!class_exists($module, false)) {
				self::setUnit($module, new &$module(&$moduleSettings));
			}
			timeRun($t++);
		}

	}
	public static function run($service) {
		return self::$Collection[$service];
	}
	public static function db() {
		return self::$Collection['database']->db;
	}
}