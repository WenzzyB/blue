<?php
spl_autoload_register(function($path){
	$path = str_replace('\\', '/', $path) . '.php';
	if(file_exists($path)) {
		require_once $path;
	}

});