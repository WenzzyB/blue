<?php
namespace app\controllers;
use app\controllers\Controller;
use app\dev\Debug;
use app\render\Render;
use app\core\Link;
class MainController extends Controller
{
	public function __construct($uri)
	{
		parent::__construct();
		Debug::print($this->lang);
		$render = new Render($uri);
	}
}