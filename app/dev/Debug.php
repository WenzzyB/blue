<?php
namespace app\dev;
abstract class Debug
{
	public static function print($var, $var1 = '', $var2 = '', $var3 = '')
	{
		echo '<pre>';
		var_dump($var);
		//Временно)
		if (!empty($var1)){ echo '<br><br><br><br>'; var_dump($var1);};
		if (!empty($var2)){ echo '<br><br><br><br>'; var_dump($var2);};
		if (!empty($var3)){ echo '<br><br><br><br>'; var_dump($var3);};
		echo '</pre>';
	}
}