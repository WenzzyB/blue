<?php
namespace app\router;
use app\dev\Debug;
class Router 
{
	private $uri;
	private $routes = [];
	private $params = [];

	public function __construct() {
		$this->uri = $_SERVER['REQUEST_URI'];
		$this->routes = require_once('app/config/routes.php');
		$this->openController();

	}
	private function check()
	{
		
		if ($this->uri != '/') {
			$this->uri = trim($this->uri, '/');
		}



		foreach ($this->routes as $arr_uri => $arr) {
			if ($this->uri == $arr_uri) {
				$this->params = $arr;
				return true;
			}
		}
		return false;
	}
	private function openController() 
	{
		if ($this->check()){
			$path_controller = 'app\controllers\\' . $this->params['controller'] . 'Controller.php';
			if (class_exists($path_controller)) {
				echo 'ok';
				//$contr = new $controller;
			} else {
				echo 'Неа.. : ' . $path_controller;
			}
		}
		


		//Debug::print($path_controller);
	}
}