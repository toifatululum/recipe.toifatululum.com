<?php
ob_start();
session_start();
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
ini_set('max_execution_time', 0); //0=NOLIMIT
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
function autoload_classes($class_name)
{
	$filename = PROJECTPATH . '/' . str_replace('\\', '/', $class_name) .'.php';
	if(is_file($filename)) include_once $filename;
}
spl_autoload_register('autoload_classes');
require 'config.php';
use App\Core\Core;
$core = new App\Core\Core();
$core -> run();
ob_end_flush();
