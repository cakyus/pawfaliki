<?php

namespace View;

class Index {

	public $title;
	public $content;

	public function write() {

		$this->title = 'It\'s Works !';
		$this->content = 'Hello World';

		include(APPLICATION_PATH.'/Template/index.php');
	}
}
