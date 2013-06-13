<?php

namespace View;

class Exception extends Index {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function write($exception = null) {

		$this->title = '501 Internal Server Error';
		
		if (is_null($exception)) {
			$this->content = 'Unknown error';
		} elseif (get_class($exception) == 'ErrorException') {
			$this->content = nl2br(htmlentities($exception->getMessage()))
				.'<p>'.$exception->getFile().':'.$exception->getLine().'</p>'
				.'<p><h2>Debug Trace</h2>'
				.nl2br(htmlentities($exception->getTraceAsString())).'</p>'
				;
		} else {
			$this->content = nl2br(htmlentities($exception->getMessage()))
				.'<p><h2>Debug Trace</h2>'
				.nl2br(htmlentities($exception->getTraceAsString())).'</p>'
				;
		}
		
		parent::write();
	}
}
