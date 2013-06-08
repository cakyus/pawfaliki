<?php

namespace Controller;

class Index {

	public function index() {

		$view = new \View\Index;
		$view->write();
	}
}
