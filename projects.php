<?php

include_once 'config/init.php';

$template = new Template('templates/projects.php');

$template->title = 'Projekty';
echo $template;