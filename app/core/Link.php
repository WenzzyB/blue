<?php
namespace app\core;
use app\dev\Error;
abstract class Link 
{
	protected $path_cfg = 'app/config/config.php';
	protected $path_lang = 'app/default/default_lang.php';

	protected $lang = [];
	protected $GLOBAL_CONFIG = [];

	public function __construct() 
	{
		$this->connectCFG();
		$this->connectLANG();
		$this->lang = require_once($this->path_lang);
		

	}
	private function connectCFG() 
	{
		if (file_exists($this->path_cfg)){
			$this->GLOBAL_CONFIG = require_once($this->path_cfg);
			return true;
		} else {
			Error::print('E_3');
		}
	}
	private function connectLANG()
	{
		$this->path_lang = 'view/templates/'.$this->GLOBAL_CONFIG['template'].'/lang/'.$this->GLOBAL_CONFIG['lang'].'/lang.php';
		if(file_exists($this->path_lang)) {
			$this->lang = require_once($this->path_lang);
		} else {
			Error::print('E_4');
		}
	}
}