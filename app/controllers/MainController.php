<?php
namespace app\controllers;
use app\controllers\Controller;
use app\dev\Debug;
class MainController extends Controller
{
	public function __construct()
	{
		parent::__construct();
		Debug::print($this->lang);
	}
}