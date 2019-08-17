<?php
namespace app\controllers;
use app\dev\Error;
use app\core\Link;
abstract class Controller
{
	protected $GLOBAL_CONFIG = [];
	protected $lang = [];

	public function __construct() {
		$link = new Link;
		$this->GLOBAL_CONFIG = $link->getCFG();
		$this->lang = $link->getLang();
	}
}