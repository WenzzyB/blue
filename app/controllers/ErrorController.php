<?php
namespace app\controllers;
use app\controllers\Controller;
use app\dev\Debug;
class ErrorController extends Controller
{
	private $error;
	public function __construct() {
		parent::__construct();
	}

	public function setError($error)
	{
		$this->error = $error;
		$this->printError();
	}
	private function printError() {

		Debug::print($this->lang);
	}
}