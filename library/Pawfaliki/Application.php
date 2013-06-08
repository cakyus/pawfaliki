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
		Loader::register();

		// start controller
		$controller = new \Controller\Index;
		$controller->index();

	}
}
