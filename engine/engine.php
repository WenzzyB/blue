<?php

class Engine {
	
	public function __construct()
	{

	 	$this->init();

	}
	private function init() 
	{
		require_once('config.php');
		if(!empty($_GET)) 
		{
			$page = $_GET['page'];
		} 
		else 
		{
			$page = 'index';
		}
		$path = 'content/templates/'. $GLOBAL_CONFIG['template']. '/' . $this->checkErrors($page) . $this->validate($page);

		$this->loadTemplate($path);
		
	}
	private function validate($page)
	{
		require_once('pages/pages_list.php');
		foreach ($pages_list as $key => $value) 
		{
			if ($page == $key) 
			{
				return $value;
			}
		}
	}
	private function loadTemplate($path) 
	{
		require_once('../language/' . $GLOBAL_CONFIG['language'] . '.php');
		$tpl = file_get_contents($path);
		foreach ($GLOBAL_LANG as $key => $value) {
			$result_tpl = preg_replace('#^{'.$key.'}&#', $value, $tpl);
		}
		$this->debug($result_tpl);

	}
	public function debug($variable) 
	{
		echo "<br><pre>";
		var_dump($variable);
		echo "</pre><br>";
	}
	public function checkErrors($page) 
	{
		if($page[0] == '4' || $page[0] == '5') {
			return 'ERRORS/';
		}else{
			return '';
		}
	}
}