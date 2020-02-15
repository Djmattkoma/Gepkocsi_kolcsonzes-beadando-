<?php
define('APPLICATION', 'Application/');
require_once APPLICATION.'functions.php'; //functions.php elérése


$configPath = 'config.json';
$page = @$_GET['page'] ? $_GET['page'] : 'home';

// core mappa elérése
switch ( $page )
{
    case 'cars': require_once APPLICATION.'Core/cars.php'; break;
    case 'cars': require_once APPLICATION.'Core/deletCar.php'; break;
    case 'cars': require_once APPLICATION.'Core/modifyCar.php'; break;
    case 'cars': require_once APPLICATION.'Core/newCar.php'; break;
    case 'regularCostumers': require_once APPLICATION.'Core/regularCostumers.php';    
}

require_once APPLICATION.'Templates/_layout.php'; //Templates/_layout.php elérése