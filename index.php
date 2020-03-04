<?php
define('ALPHA', 'App/');
require_once ALPHA.'functions.php';


$configPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';


switch ( $page )
{
    case 'cars': 	require_once ALPHA.'Core/cars.php'; 		break;
    case 'delet': 	require_once ALPHA.'Core/deletCar.php'; 	break;
    case 'modify': 	require_once ALPHA.'Core/modifyCar.php'; 	break;
    case 'newcar': 	require_once ALPHA.'Core/newCar.php'; 		break;
    }

require_once ALPHA.'Temp/layout.php';