<?php


class Core {
	static function loadController($name){
		$patch = preg_split('/(?=[A-Z])/',$name);
		require_once 'controllers'.DIRECTORY_SEPARATOR.$patch[1].DIRECTORY_SEPARATOR.$name.'.php';
	}
}