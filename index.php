<?php

include_once 'config/init.php';
$template = new Template('templates/home.php');

$template->title = 'Strona główna';
echo $template;