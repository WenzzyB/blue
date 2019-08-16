<?php 

namespace app\core;
use app\config\Debug;
use app\router\Router;

class Core 
{
	public function __construct()
	{
		
		$this->init();
	}

	private function init()
	{ 
		$router = new Router;
	}
}