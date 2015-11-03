<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR);
define('BASE', ROOT . 'libs' . DIRECTORY_SEPARATOR . 'base' . DIRECTORY_SEPARATOR);
define('CNF', BASE . 'cnfs' . DIRECTORY_SEPARATOR);
function timeRun($m) {
	echo '<span style="position:absolute; bottom:' . (30 * $m) . 'px; right:10px; color:red;">Time runing N' . $m . ':' . round((microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"]), 3) . 's' . PHP_EOL . '</span>';

}