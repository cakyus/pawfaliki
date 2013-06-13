<?php

namespace Pawfaliki;

class Exception extends \Exception {

	public function __construct(
		  $message
		, $code = 0
		, \Exception $previous = null
		) {

		parent::__construct($message, $code, $previous);
	}

	public static function exceptionHandler($exception) {
		
		$view = new \View\Exception;
		
		$view->write($exception);
	}

	public static function errorHandler($errno, $errstr, $errfile, $errline) {
		throw new \ErrorException($errstr, $errno, 0, $errfile, $errline);
	}
}
