<?php
//Database params
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','librariesDB');

//APPROOT
define('APPROOT', dirname(dirname(__FILE__)));

//URLROOT
define('URLROOT','localhost/librarie');

//SITENAME
define('SITENAME','APP');

//CSS
define('CSS_PATH',dirname(__DIR__) . '/public/css/bootstrap.css');

//Controller
define('CONTROLLER_PATH',__DIR__ . '/controller/');

//Lib
define('DATABASE_PATH',__DIR__ . '/lib/database.php');

//Pages
define('PAGES_PATH',__DIR__ . '/pages/');