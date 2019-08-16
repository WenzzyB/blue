<?php
echo '<style>body{color:#fff; background: #000;}</style>';
error_reporting(E_ALL);
use app\router\Router;
require_once('app/autoload.php');
$router = new Router;

//require_once('engine/engine.php');
//$engine = new Engine;