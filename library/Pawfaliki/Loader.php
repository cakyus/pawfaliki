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

    private static function load($className) {

        if (class_exists($className)) {
            return false;
        }

        // autoload library
        $classFile = LIBRARY_PATH.'/'.str_replace('\\','/',$className).'.php';

        if (is_readable($classFile)) {
            return require_once($classFile);
        }

		// autoload application library
        $classFile = APPLICATION_PATH.'/'.str_replace('\\','/',$className).'.php';

        if (is_readable($classFile)) {
            return require_once($classFile);
        }

    }
}
