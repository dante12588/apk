<?php

require_once 'config.php';
// require_once 'libs/Template.php';

function autoloader($class_name){
    require_once 'libs/'. $class_name . '.php';
}
spl_autoload_register('autoloader');