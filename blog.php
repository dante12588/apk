<?php

include_once 'config/init.php';

$template = new Template('templates/blog.php');

$template->title = 'Strona z wpisami';
echo $template;