<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/apk/css/style.css">
</head>
<body>

<nav class="nav-bar n-width">
    <div class="nav-bar__logo">
        <a href="index.php"><img src="/apk/img/logo.webp" alt=""></a>
    </div>
    <div class="nav-bar__menu">
        <ul>
            <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'index.php') echo 'active' ?>" href="index">home</a></li>
            <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'aboutus.php') echo 'active' ?>" href="aboutus">about us</a></li>
            <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'projects.php') echo 'active' ?>" href="projects">projects</a></li>
            <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'contact.php') echo 'active' ?>" href="contact">contact</a></li>
            <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'blog.php') echo 'active' ?>" href="blog">blog</a></li>
           
            <?php if (ADMIN) { ?>
                <li><a class="<?php if(substr($_SERVER['PHP_SELF'], 5) == 'admin.php') echo 'active' ?>" href="admin">[ panel admin ]</a></li>
            <?php } ?>
            
        </ul>
    </div>
</nav>