<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/cnfs/constants.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.autoloader.class.php';
include $_SERVER['DOCUMENT_ROOT'] . '/libs/base/system.kernel.class.php';
Kernel::instance(include CNF . 'backendConf.loc.php');
$router = KerneL::get('systemRouter')->listen();
