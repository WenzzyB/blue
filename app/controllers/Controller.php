<?php
namespace app\controllers;
use app\dev\Error;
use app\core\Link;
abstract class Controller extends Link
{
	public function __construct() {
		parent::__construct();
	}
}