<?php

define('APPLICATION_PATH', __DIR__);
define('LIBRARY_PATH', dirname(__DIR__).'/library');

include(LIBRARY_PATH.'/Pawfaliki/Application.php');

$application =new \Pawfaliki\Application;
$application->start();
