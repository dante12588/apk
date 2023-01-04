<?php

include_once 'config/init.php';
$template = new Template('templates/podstrona.php');

$template->title = 'Podastrona';
echo $template;