<?php

include_once 'config/init.php';
$template = new Template('templates/frontpage.php');

$template->title = 'Moja apka';
echo $template;

$db = new Database();

dump($db->query());