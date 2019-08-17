<?php
namespace app\core;
use app\dev\Error;
use app\dev\Debug;
class Link 
{
	private $path_cfg = 'app/config/config.php';
	private $path_lang;

	private $lang = [];
	private $GLOBAL_CONFIG = [];

	public function __construct() {
		$this->connect();
	}

	public function connect()
	{
		if (file_exists($this->path_cfg)) {
			$this->GLOBAL_CONFIG = require_once($this->path_cfg);
			$this->path_lang = 'view/templates/'.$this->GLOBAL_CONFIG['template'].'/lang/'.$this->GLOBAL_CONFIG['lang'].'/lang.php';
			if(file_exists($this->path_lang)) {
				$this->lang = require_once($this->path_lang);
			} else {
				Error::print('E_4', 'default');
			}
		} else {
			Error::print('E_3', 'default');
		}
		
		
	}
	public function getLang() {
		return $this->lang;
	}
	public function getCFG() {

		return $this->GLOBAL_CONFIG;

	}
}