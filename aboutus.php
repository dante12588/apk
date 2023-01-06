<?php

include_once 'config/init.php';

$template = new Template('templates/aboutus.php');

$template->title = 'O nas';
echo $template;