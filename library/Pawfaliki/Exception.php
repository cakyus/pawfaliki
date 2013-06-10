<?php

namespace Pawfaliki;

class Exception extends \Exception {

	// debug info
	public $debug;

	public function __construct(
		  $message
		, $debug = ''
		, $code = 0
		, \Exception $previous = null
		) {

		$this->debug = $debug;
		parent::__construct($message, $code, $previous);
	}

	public static function exceptionHandler($exception) {
		header('Content-Type: text/plain');

		if (get_class($exception) == __CLASS__) {
			exit($exception->getMessage()."\n\n".$exception->debug);
		} else {
			exit($exception->getMessage());
		}
	}

	public static function errorHandler($number, $message, $file, $line) {
		header('Content-Type: text/plain');
		exit($message."\n\n".$file."\t".$line);
	}
}
