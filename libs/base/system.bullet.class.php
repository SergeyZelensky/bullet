<?php
class Bullet {
	public static function instance($configuration) {
		foreach ($$configuration as $module => $moduleSettings) {
			if (!class_exists($module, false)) {
				Register::setUnit($module, new $module);
			}
		}
	}
}