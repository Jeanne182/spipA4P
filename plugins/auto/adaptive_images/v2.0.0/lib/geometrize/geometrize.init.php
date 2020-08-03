<?php

/**
 * PHP version of https://github.com/Tw1ddle/geometrize-haxe/commit/e6ed1ab8c3867ac0da5bfea25ee4e7204ad286be
 * Based on PHP code generated with Haxe on this base version
 * + manual optimization&refactoring
 *
 * boot PHP utils classes and start autoload for geometrize & al
 */

if(version_compare(PHP_VERSION, '5.1.0', '<')) {
    exit('Your current PHP version is: ' . PHP_VERSION . '. Haxe/PHP generates code for version 5.1.0 or later');
} else if(version_compare(PHP_VERSION, '5.4.0', '<')) {
	trigger_error('Your current PHP version is: ' . PHP_VERSION . '. Code generated by Haxe/PHP might not work for versions < 5.4.0', E_USER_WARNING);
};


require_once dirname(__FILE__).'/php/Boot.class.php';