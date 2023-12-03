<?php
spl_autoload_register(function ($namespace){
	if(stripos($namespace, "T26") !== false){
		$replacedStr = str_replace("T26\\",'t26\\', $namespace);
		require_once WP_PLUGIN_DIR.'\\'.$replacedStr.'.php';
	}
});