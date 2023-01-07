<?php

require_once 'config.php';
require_once 'utylitys/utylitys.php';

//klasy
require_once 'libs/Database.php';
require_once 'libs/Template.php';
require_once 'libs/Posts.php';
require_once 'libs/Post.php';

//Auto ładowanie klas działa tylko z Template.php ???
// function autoloader($class_name){
//     require_once 'libs/'. $class_name . '.php';
// }
// spl_autoload_register('autoloader');