<?php

namespace Pawfaliki;

class Config {

	private static $data;

	public function __construct() {

		if (is_null(self::$data)) {
			// initiate configuration values
			self::$data = include(APPLICATION_PATH.'/config/config.php');
		}
	}

	public function __get($name) {

		if (array_key_exists($name, self::$data)) {
			return self::$data[$name];
		}

		return null;
	}

	/**
	 * Properties are read only
	 *
	 * @return \Exception
	 **/

	public function __set($name, $value) {
		throw new \Exception('Properties of '.__CLASS__.' are read only');
	}
}
