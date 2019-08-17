<?php
namespace app\dev;
use app\dev\Debug;
class Error 
{
	private static $ErrorController = 'app\controllers\ErrorController';
	public static function print($error) {
		//Debug::print(class_exists(self::$ErrorController));
		if (class_exists(self::$ErrorController)) {
			$send = new self::$ErrorController;
			$send->setError($error);
		} else {
			echo 'FATAL ERROR : ('.self::$ErrorController.') NOT FOUND'; 
		}
	}
}