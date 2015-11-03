<?php
$startMemory = 0;

$startMemory = memory_get_usage();
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/cnfs/constants.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.autoloader.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.bullet.class.php';
Bullet::instance(include CNF . 'appConf.loc.php');
//$router = Bullet::run('router');
/*for ($i = 0; $i < 100; $i++) {
$router->addAlias('controller', 'action', 'alisas' . $i, $i);
}*/
//$router->tree();
echo '<span style="position:absolute; bottom:10px; right:10px; color:red;">Memory:' . round((memory_get_usage() - $startMemory) / 1024, 3) . ' kb' . PHP_EOL . '</span>';
