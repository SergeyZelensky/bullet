<?php
ini_set('xdebug.default_enable', 1);
ini_set('xdebug.profiler_enable', 1);
echo '<pre>';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/cnfs/constants.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.autoloader.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.kernel.class.php';
Kernel::instance(include CNF . 'appConf.loc.php');
Kernel::get('router')->listen();
