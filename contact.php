<?php

include_once 'config/init.php';

$template = new Template('templates/contact.php');

$template->title = 'Kontakt';
echo $template;