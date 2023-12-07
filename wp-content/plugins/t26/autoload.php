<?php
spl_autoload_register(function ($namespace){
	if (strpos($namespace, 'T26\\') === 0){
		var_dump($namespace);
	}
});