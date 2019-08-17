<?php
namespace app\router;
use app\dev\Debug;
use app\dev\Error;
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
		
		if ($this->uri !== '/') {
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
			$controller = ucfirst($this->params['controller']).'Controller';
			$path_controller = 'app\controllers\\' . $controller;
			//Debug::print(class_exists($path_controller));
			if (class_exists($path_controller)) {
				$connect = new $path_controller;
			} else {
				Error::print('E_1');
			}
		} else {
			Error::print('E_2');
		}
		


		//Debug::print($path_controller);
	}
}