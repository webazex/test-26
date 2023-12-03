<?php
spl_autoload_register(function ($namespace){
	var_dump($namespace);
	if(stripos($namespace, "T26") !== false){
		$replacedStr = str_replace("T26",'', $namespace);
		var_dump($replacedStr);
	}
});