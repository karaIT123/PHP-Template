<?php

require '../app/Autoloader.php';
require '../app/env.php';

App\Autoloader::register();


if(isset($_SERVER["REQUEST_URI"])){
    $p = $_SERVER["REQUEST_URI"];
}
else{
    $p = 'home';
}

#echo dirname(__DIR__) . "/app/pages/" ;

#echo $_SERVER["REQUEST_URI"];
#echo CONTROLLER_PATH;


ob_start();
#require dirname(__DIR__) . "/app/pages/". $_SERVER["REQUEST_URI"].'.php';
require dirname(__DIR__) . "/app/controller". $_SERVER["REQUEST_URI"].'Controller.php';
#var_dump(dirname(__DIR__) . "/app/controller". $_SERVER["REQUEST_URI"].'Controller.php');

$content = ob_get_clean();
require dirname(__DIR__) . "/app/pages/templates/default.php";




