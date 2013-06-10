<?php

namespace Pawfaliki;

class Application {

	public function start() {

        // show all errors
        error_reporting(-1);
        ini_set('display_errors', 1);

        // set default time zone
        date_default_timezone_set('Asia/Jakarta');

        // start output buffering
        ob_start();

		// register autoloader
		include('Loader.php');

		// start autoloader
		Loader::register();

		// exception handler
        set_exception_handler('Pawfaliki\\Exception::exceptionHandler');

		// error handler
        set_error_handler('Pawfaliki\\Exception::errorHandler');

		// default controller and function
		$controllerName = '\\Controller\\Index';
		$functionName = 'index';

		// get controller and function
		if (	isset($_REQUEST['p'])
			&&	preg_match(
					"/^([A-Z][a-zA-Z0-9]+)(\/[A-Z][a-zA-Z0-9]+)*(\/[a-z][a-zA-Z0-9]+)*$/"
					, $_REQUEST['p']
					)
			) {
			$p = explode('/', $_REQUEST['p']);
			if (count($p) > 1) {
				$functionName = array_pop($p);
				$controllerName = '\\Controller\\'.implode('\\', $p);
			} else {
				$controllerName = '\\Controller\\'.$p[0];
			}
		}

		if (Loader::load($controllerName)) {
			$controller = new $controllerName;
		} else {
			throw new Exception('Bad Request'
				, "Invalid controller name. $controllerName"
				);
		}

		if (method_exists($controller, $functionName)) {
			$controller->$functionName();
		} else {
			throw new Exception('Bad Request'
				, "Invalid function name. $functionName"
				);
		}
	}
}
