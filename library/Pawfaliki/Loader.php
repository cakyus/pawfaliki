<?php

namespace Pawfaliki;

class Loader {

    /**
     * Register autoloader
     **/

    public static function register() {
        spl_autoload_register(__CLASS__.'::load');
    }

    /**
     * Autoloader
     **/

    public static function load($className) {

        if (class_exists($className)) {
            return true;
        }

        // autoload library
        $classFile = LIBRARY_PATH.'/'.str_replace('\\','/',$className).'.php';

        if (is_readable($classFile)) {
            require_once($classFile);
			return true;
        }

		// autoload application library
        $classFile = APPLICATION_PATH.'/'.str_replace('\\','/',$className).'.php';

        if (is_readable($classFile)) {
            require_once($classFile);
			return true;
        }

		return false;
    }
}
