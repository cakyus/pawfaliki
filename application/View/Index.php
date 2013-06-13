<?php

namespace View;

class Index {

	public $title;
	public $content;
	
	public function __construct() {
		
		$this->title = 'It\'s Works !';
		$this->content = 'Hello World';		
	}

	public function write($content = null) {
		
		include(APPLICATION_PATH.'/Template/index.php');
	}
}
