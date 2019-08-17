<?php
namespace app\controllers;
use app\controllers\Controller;
use app\dev\Debug;
use app\render\Render;
class ErrorController extends Controller
{
	private $error;
	private $def_lang_path = 'app/default/default_lang.php';
	public function __construct() {
		parent::__construct();
	}

	public function setError($error)
	{
		$this->error = $error;
		$this->printError();
	}
	private function printError() {
		$render = new Render;
		$render->renderError($this->error);

		//Debug::print($this->lang);
	}
}