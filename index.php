<?php
//Front controller

ini_set('display', 1);
error_reporting(E_ALL);

define('Root', dirname('_FILE_'));
require_once(Root.'/components/Autoload.php');

$route = new Router;
$route -> run();
?>