<?php

include_once 'config/init.php';

// Tworzenie obiektu szablonu
$template = new Template('templates/blog.php');

// Podstawowe ustawienia widoku
$template->title = 'Strona z wpisami';

//Posty które mają się wyświetlić na podstronie blog
$posts = new Posts();
$template->posts = $posts->getPosts();
// $posts->addPost('tytul posta', 'content asdasd ', 2);

echo $template;