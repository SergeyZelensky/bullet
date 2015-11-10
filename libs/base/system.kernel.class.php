<?php
class Kernel
{
    protected static $storageComponent = [];
    public static function instance($Configuration)
    {
        foreach ($Configuration as $module => $params) {
            if (!isset($params['initMethod'])) {
                self::$storageComponent[$module] = new $module($params);
            } else {
                self::$storageComponent[$module] = $module::instance($params);
            }
        }
    }
    public static function get($module)
    {
        return self::$storageComponent[$module];
    }
}
