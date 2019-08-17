<?php
namespace app\render;
use app\core\Link;
use app\dev\Error;
use app\dev\Debug;
class Render 
{
	private $render = '';
	private $path;
	public function __construct() {
		//Debug::print($this->GLOBAL_CONFIG);
		//$this->path = 'view/templates/'. $this->GLOBAL_CONFIG['template'].'/';
	}
	public function renderAll() 
	{
		
	}
	public function renderError($error) 
	{
		if (!empty($this->lang)) {
			echo $this->lang[$error];
		}
	}
	public function renderHeader() 
	{
		$path_header = $this->path . 'header.'. $this->GLOBAL_CONFIG['default_tpl_names'];
		if(file_exists($path_header)) {
			$this->render = file_get_contents($path_header);
		} else {
			Error::print('E_4');
		}
	}

	public function renderFooter() 
	{

	}
}